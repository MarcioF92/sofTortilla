<?php

class usuariosController extends Controller
{

	private $_usuarios;

    public function __construct()
    {
        parent::__construct();
        $this->_usuarios = $this->loadModel('usuarios');
    }
 
    public function index()
    {

        $this->_acl->access('usuarios');
        $this->_view->setJs(array('prueba'));
        $this->_view->assign('titulo', 'Usuarios');
        $this->_view->assign('usuarios', $this->_usuarios->getUsuarios());
        $this->_view->render('index', 'usuarios'); //Renderiza y manda el nombre de la vista

    }

    public function permisos($idusuario){
    	$id = $this->filtrarInt($idusuario);
        $existeUsr = $this->_usuarios->getUsuario($id);

    	if (!$id || count($existeUsr) == 0) {
    		$this->redireccionar('usuarios');
    	}

    	if ($this->getInt('guardar') == 1) {
    		$values = array_keys($_POST);
    		$replace = array();
    		$eliminar = array();

    		for ($i=0; $i < count($values); $i++) { 
    			if (substr($values[$i],0,5) == 'perm_') {

                    $permiso = (strlen($values[$i]) - 5);

    				if($_POST[$values[$i]] == 'x'){
    					$eliminar[] = array(
    						'idusuario' => $id,
    						'permiso' => substr($values[$i], -1)

    					);
    				} else {
    					if ($_POST[$values[$i]] == 1) {
    						$v = 1;
    					} else {
    						$v = 0;
    					} 				

    				$replace[] = array(
    						'idusuario' => $id,
    						'permiso' => substr($values[$i], -1),
    						'valor' => $v
    					);
					}
    			}
    		}

    		for ($i=0; $i < count($eliminar); $i++) { 
				$this->_usuarios->eliminarPermiso($eliminar[$i]['idusuario'], $eliminar[$i]['permiso']);
			}

			for ($i=0; $i < count($replace); $i++) { 
				$this->_usuarios->editarPermiso($replace[$i]['idusuario'], $replace[$i]['permiso'], $replace[$i]['valor']);
			}
		}

		$permisosUsuario = $this->_usuarios->getPermisosUsuario($idusuario);
		$permisosRole = $this->_usuarios->getPermisosRole($idusuario);

		if (!$permisosUsuario || !$permisosRole) {
			$this->redireccionar('usuarios');
		}

		$this->_view->assign('titulo', 'Permisos de Usuario');
		$this->_view->assign('permisos', array_keys($permisosUsuario));
		$this->_view->assign('usuario', $permisosUsuario);
        $this->_view->assign('role', $permisosRole);
        $this->_view->assign('info', $this->_usuarios->getUsuario($idusuario));
        $this->_view->render('permisos', 'usuarios'); //Renderiza y manda el nombre de la vista
    }

}

?>