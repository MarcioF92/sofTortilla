<?php

class aclController extends Controller
{

	private $_aclm;

    public function __construct()
    {
        parent::__construct();
        $this->_aclm = $this->loadModel('acl');
    }
 
    public function index()
    {
        $this->_view->assign('titulo', 'Listas de acceso');
        $this->_view->render('index', 'acl'); //Renderiza y manda el nombre de la vista

    }

    public function roles(){
    	$this->_view->assign('titulo', 'Administración de Roles');
    	$this->_view->assign('roles', $this->_aclm->getRoles());
        $this->_view->render('roles', 'acl'); //Renderiza y manda el nombre de la vista
    }

    public function nuevo_role(){
        $this->_view->assign('titulo', 'Nuevo Role');
        
        if($this->getInt('guardar') == 1){
            $this->_view->assign('datos', $_POST);
            
            if(!$this->getSql('role')){
                $this->_view->assign('_error', 'Debe introducir el nombre del role');
                $this->_view->render('nuevo_role', 'acl');
                exit;
            }
            
            $this->_aclm->insertarRole($this->getSql('role'));
            $this->redireccionar('configuracion/acl/roles');
        }
        
        $this->_view->render('nuevo_role', 'acl');
    }

    public function editar_role($idrole){
    	$this->_view->assign('titulo', 'Editar Role');
    	$this->_view->assign('nombre', $this->_aclm->getNombreRole($idrole));
        
        if($this->getInt('guardar') == 1){
            $this->_view->assign('datos', $_POST);
            
            if(!$this->getPostParam('nombre')){
                $this->_view->assign('_error', 'Debe introducir el nombre del role');
                $this->_view->render('editar_role', 'acl');
                exit;
            }

            $nombre = $this->getPostParam('nombre');
            
            $this->_aclm->editarRole($idrole, $nombre);
            $this->redireccionar('configuracion/acl/roles');
        }
        
        $this->_view->render('editar_role', 'acl');
    }


    /*
    *
    *	Comienza la parte de la edicion de los Permisos
    *
    *
    *
    *
    *
    */

    public function permisos_role($idrole){
    	$id = $this->filtrarInt($idrole);
    	if (!$id) {
    		$this->redireccionar('configuracion/acl/roles');
    	}

    	$row = $this->_aclm->getRole($id);

    	if (!$row) {
    		$this->redireccionar('configuracion/acl/roles');
    	}

    	$this->_view->assign('titulo', 'Administración de permisos Role');
    	if ($this->getInt('guardar') == 1) {
    		$values = array_keys($_POST);
    		$replace = array();
    		$eliminar = array();

    		for ($i=0; $i < count($values); $i++) { 
    			if (substr($values[$i],0,5) == 'perm_') {
    				if($_POST[$values[$i]] == 'x'){
    					$eliminar[] = array(
    						'idrole' => $id,
    						'permiso' => substr($values[$i], -1)

    					);
    				} else {
    					if ($_POST[$values[$i]] == 1) {
    						$v = 1;
    					} else {
    						$v = 0;
    					} 				

    				$replace[] = array(
    						'idrole' => $id,
    						'permiso' => substr($values[$i], -1),
    						'valor' => $v
    					);
					}
    			}
    		}

			for ($i=0; $i < count($eliminar); $i++) { 
				$this->_aclm->eliminarPermisoRole($eliminar[$i]['idrole'], $eliminar[$i]['permiso']);
			}

			for ($i=0; $i < count($replace); $i++) { 
				$this->_aclm->editarPermisoRole($replace[$i]['idrole'], $replace[$i]['permiso'], $replace[$i]['valor']);
			}
    	}
    	$this->_view->assign('roles', $row);
    	$this->_view->assign('permisos', $this->_aclm->getPermisosRole($id));
        $this->_view->render('permisos_role', 'acl'); //Renderiza y manda el nombre de la vista
    }

    public function permisos()
    {
        $this->_view->assign('titulo', 'Administracion de permisos');
        $this->_view->assign('permisos', $this->_aclm->getPermisos());
        $this->_view->render('permisos', 'acl');
    }
    
    public function nuevo_permiso()
    {
        $this->_view->assign('titulo', 'Nuevo Permiso');
        
        if($this->getInt('guardar') == 1){
            $this->_view->assign('datos', $_POST);
            
            if(!$this->getSql('permiso')){
                $this->_view->assign('_error', 'Debe introducir el nombre del permiso');
                $this->_view->render('nuevo_permiso', 'acl');
                exit;
            }
            
            if(!$this->getAlphaNum('llave')){
                $this->_view->assign('_error', 'Debe introducir la llave del permiso');
                $this->_view->render('nuevo_permiso', 'acl');
                exit;
            }
            
            $this->_aclm->insertarPermiso(
                    $this->getSql('permiso'), 
                    $this->getAlphaNum('llave')
                    );
            
            $this->redireccionar('configuracion/acl/permisos');
        }
        
        $this->_view->render('nuevo_permiso', 'acl');
    }



}

?>