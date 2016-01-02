<?php

class indexController extends Controller
{
	private $_postsModel;

    public function __construct()
    {
        parent::__construct();
        $this->_postsModel = $this->loadModel('post');
    }
 
    public function index()
    {	
    	$this->_view->setTemplate('page');
    	$url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL); // Si existe URL, se eliminan todos los caracteres no permitidos 
        $url = explode('/', $url); // Crea Array y divide URL, separando elementos por barras queda de la forma controlador/metodo/argumento
        $url = array_filter($url); // Todos los elementos que no sean válidos en el array, se eliminan
        $bandera = true;
        $final_url = "";
        foreach ($url as $u) {
        	$current_url = strtolower($u);
        	if(!$this->_postsModel->existPost($current_url)){
        		$bandera = false;
        		break;
        	}
        	$final_url .= "/" . $current_url;
        }

        if($bandera){
        	$post = $this->_postsModel->getPost($final_url);
			$this->_view->assign('post', $post);
	        $this->_view->render("", $post['idpost']); //Renderiza y manda el nombre de la vista
        } else {
        	$this->redirect('error/not_found');
        }	
    }

}

?>