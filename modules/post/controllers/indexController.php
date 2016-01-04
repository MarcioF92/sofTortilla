<?php

class indexController extends Controller
{
    private $_post;

    public function __construct(){
        parent::__construct();
        $this->_post = $this->loadModel('post');
    }

    public function index($pagina = false){

        $this->_view->setJs(array('prueba'));


        if (!$this->filterInt($pagina)) {
            $pagina = false;
        } else {
            $pagina = (int) $pagina;
        }

        $paginador = new Paginador();

        $this->_view->assign('posts', $paginador->paginar($this->_post->getPosts(), $pagina));
        $this->_view->assign('paginacion', $paginador->getView('prueba', 'post/index'));
        $this->_view->assign('titulo', "Posts");
        $this->_view->render('index', 'post'); //Renderiza y manda el nombre de la vista
    }

    public function nuevo(){
        //Session::accesoEstricto(array('usuario'), true); Tipo de usuario a lo que se le permite

        $this->_acl->access('hacer_pete');

        $this->_view->assign('titulo', "Nuevo Post");
        $this->_view->setJsPlugin(array('jquery.validate'));
        $this->_view->setJs(array('nuevo'));

        if ($this->getInt('guardar') == 1) { // Revisa si se insertó
            $this->_view->assign('datos', $_POST);

            if(!$this->getText('titulo')){ // Name del input
                $this->_view->assign('_error', 'Debe introducir el título del post');
                $this->_view->render('nuevo', 'post');
                exit;
            }

             if(!$this->getText('cuerpo')){
                $this->_view->assign('_error', 'Debe introducir el cuerpo del post');
                $this->_view->render('nuevo', 'post');
                exit;
            }


            $imagen = '';

            if(isset($_FILES['imagen']['name'])){
                $ruta = ROOT . 'public' . DS . 'img' . DS . 'post' . DS;
                $upload = new upload($_FILES['imagen'], 'es_ES');
                $upload->allowed = array('image/*');
                $upload->file_new_name_body = 'upl_' . uniqid();
                $upload->process($ruta);

                if($upload->processed){
                    $imagen = $upload->file_dst_name;
                    $thumb = new upload($upload->file_dst_pathname);
                    $thumb->image_resize = true;
                    $thumb->image_x = 100;
                    $thumb->image_y = 70;
                    $thumb->file_name_body_pre = 'thumb_';
                    $thumb->process($ruta . 'thumb' . DS);

                } else {
                    $this->_view->assign('_error', $upload->error);
                    $this->_view->render('nuevo', 'post');
                    exit;
                }

            }

            $this->_post->insertarPost(
                $this->getPostParam('titulo'),
                $this->getPostParam('cuerpo'),
                $imagen
                );

            $this->redirect('post');

        }

        $this->_view->render('nuevo', 'post');
    }

    public function editar($id){

        //$this->_acl->access('editar_post');

        if(!$this->filterInt($id)){
            $this->redirect('post');
        }

        if(!$this->_post->getPostById($this->filterInt($id))){
            $this->redirect('post');
        }

        $this->_view->assign('title', "Editar post");
        $this->_view->setJs(array('nuevo'));

        if ($this->getInt('guardar') == 1) {
            //$this->_view->datos = $_POST;

            if(!$this->getText('title')){ // Name del input
                $this->_view->assign('title', 'Debe introducir el título del post');
                $this->_view->render('editar', 'post');
                exit;
            }

             if(!$this->getText('content')){
                $this->_view->assign('title', 'Debe introducir el cuerpo del post');
                $this->_view->render('editar', 'post');
                exit;
            }

            $this->_post->editarPost(
                $this->filterInt($id),
                $this->getPostParam('title'), 
                $this->getPostParam('content')
                );

            $this->redirect('post');
        }

        $this->_view->assign('post', $this->_post->getPostById($this->filterInt($id)));
        $this->_view->render('nuevo', 'post');

    }

    public function eliminar($id){
         Session::acceso('admin'); // Tipo de usuario a lo que se le permite
        if(!$this->filterInt($id)){
            $this->redirect('post');
        }

        if(!$this->_post->getUnPost($this->filterInt($id))){
            $this->redirect('post');
        }

        $this->_post->eliminarPost($this->filterInt($id));
        $this->redirect('post');
    }

    public function prueba($pagina = false){
        /*$model = $this->loadModel('post');
        for ($i=0; $i < 300; $i++) { 
           $model->insertarPrueba('Titulo ' . $i, 'Cuerpo ' . $i, (($i % 2) + 1), (($i % 5) + 1));
        }

        if (!$this->filterInt($pagina)) {
            $pagina = false;
        } else {
            $pagina = (int) $pagina;
        }*/

        $paginador = new Paginador();

        $ajaxModel = $this->loadModel('ajax');
        $this->_view->setJs(array('prueba'));
        $this->_view->assign('paises', $ajaxModel->getPaises());
        $this->_view->assign('posts', $paginador->paginar($this->_post->getPrueba()));
        $this->_view->assign('paginacion', $paginador->getView('paginacion_ajax'));
        $this->_view->assign('titulo', "Posts");
        $this->_view->render('prueba', 'prueba'); //Renderiza y manda el nombre de la vista
    }

    public function pruebaAjax(){

        $pagina = $this->getInt('pagina');
        $nombre = $this->getSql('nombre');
        $pais = $this->getInt('pais');
        $ciudad = $this->getInt('ciudad');
        $registros = $this->getInt('registros');
        $condicion = '';

        if ($nombre) {
            $condicion = " AND r.titulo like '%$nombre%'";
        }

        if ($pais) {
            $condicion .= " AND r.idpais = $pais";
        }

        if ($ciudad) {
            $condicion .= " AND r.idciudad = $ciudad";
        }
        
        $paginador = new Paginador();

        $this->_view->setJs(array('prueba'));
        $this->_view->assign('posts', $paginador->paginar($this->_post->getPrueba($condicion), $pagina, $registros));
        $this->_view->assign('paginacion', $paginador->getView('paginacion_ajax'));
        $this->_view->render('ajax/prueba', false, true);
    }

}

?>