<?php

class usuariosController extends Controller
{

	private $_usuariosModel;

    public function __construct()
    {
        parent::__construct();
        $this->_usuariosModel = $this->loadModel('usuarios');
        $this->_acl->access('usuarios');
    }
 
    public function index(){

        $this->_view->assign('titulo', 'Usuarios');
        $this->_view->assign('users', $this->_usuariosModel->getUsers());
        $this->_view->render('index', 'usuarios'); //Renderiza y manda el nombre de la vista

    }

    public function permisos($iduser = false){
        if (!$iduser) {
            $this->redirect('configuracion/usuarios');
        }
        $this->_view->assign('titulo', 'Permisos de Usuario');

    	$iduser = $this->filterInt($iduser);

        $permissions = $this->_usuariosModel->getPermissions();

        $this->_view->assign('user', $this->_usuariosModel->getUser($iduser));
        $this->_view->assign('permissions', $permissions);

    	if ($this->getInt('guardar') == 1) {
            $enabled = array();
            $disabled = array();
    		foreach ($permissions as $permission) {
                $perm = $this->getInt('perm_' . $permission->getIdpermission());
                switch ($perm){
                    case -1:
                        break;
                    case 1:
                        $enabled[] = $permission;
                        break;
                    case 0:
                        $disabled[] = $permission;
                        break;
                }
            }
            $this->_usuariosModel->updatePermissions($enabled, $disabled, $iduser);
            $this->redirect("configuracion/usuarios");
		}

        $this->_view->render('permisos', 'usuarios'); //Renderiza y manda el nombre de la vista
    }

    public function add_user(){
        $this->_view->assign('titulo', 'Permisos de Usuario');
        $this->_view->assign('roles', $this->_usuariosModel->getRoles());

        if ($this->getInt('guardar') == 1) {
            $this->_view->assign('datos', $_POST);

            if(!$this->getPostParam('name')){
                $this->_view->assign('_error', 'Debe introducir el nombre');
                $this->_view->render('add_user', 'usuarios');
                exit;
            }

            if(!$this->getPostParam('user')){
                $this->_view->assign('_error', 'Debe introducir el usuario');
                $this->_view->render('add_user', 'usuarios');
                exit;
            } else {
                if ($this->_usuariosModel->existUsernameWithDifferentId($this->getPostParam('user'))) {
                    $this->_view->assign('_error', 'Ya existe usuario con ese nombre');
                    $this->_view->render('add_user', 'usuarios');
                    exit;
                }
            }

            if(!$this->getPostParam('password')){
                $this->_view->assign('_error', 'Debe introducir la contraseña');
                $this->_view->render('add_user', 'usuarios');
                exit;
            }

            if(!$this->getPostParam('email') || !$this->validateEmail($this->getPostParam('email'))){
                $this->_view->assign('_error', 'Debe introducir email válido');
                $this->_view->render('add_user', 'usuarios');
                exit;
            } else {
                if ($this->_usuariosModel->existEmailUserWithDifferentId($this->getPostParam('email'))) {
                    $this->_view->assign('_error', 'Ya existe usuario con ese email');
                    $this->_view->render('add_user', 'usuarios');
                    exit;
                }
            }

            if(!$this->getInt('role') == -1){
                $this->_view->assign('_error', 'Debe elegir un Role');
                $this->_view->render('add_user', 'usuarios');
                exit;
            }

            if($this->getInt('disabled') == 1){
                $enabled = 0;
            } else {
                $enabled = 1;
            }

            $this->_usuariosModel->addUser($this->getPostParam('name'), $this->getPostParam('user'), $this->getPostParam('password'), $this->getPostParam('email'), $this->getInt('role'), $enabled);

            $this->redirect('configuracion/usuarios');

        }

        $this->_view->render('add_user', 'usuarios');
    }

    public function delete_user($iduser = false){
        if (!$iduser) {
            $this->redirect('configuracion/usuarios');
        }
        $this->_view->assign('titulo', 'Eliminar Usuario');
        $this->_view->assign('user', $this->_usuariosModel->getUser($iduser));

        if($this->getInt('aceptar') == 1){
            $this->_usuariosModel->deleteUser($iduser);
            $this->redirect('configuracion/usuarios');
        }

        if($this->getInt('cancelar') == 1){
            $this->redirect('configuracion/usuarios');
        }

        $this->_view->render('delete_user', 'usuarios');
    }

    public function edit_user($iduser = false){
        if (!$iduser) {
            $this->redirect('configuracion/usuarios');
        }
        $this->_view->assign('titulo', 'Editar Usuario');
        $this->_view->assign('user', $this->_usuariosModel->getUser($iduser));
        $this->_view->assign('roles', $this->_usuariosModel->getRoles());

        if ($this->getInt('guardar') == 1) {
            $this->_view->assign('datos', $_POST);

            if(!$this->getPostParam('name')){
                $this->_view->assign('_error', 'Debe introducir el nombre');
                $this->_view->render('edit_user', 'usuarios');
                exit;
            }

            if(!$this->getPostParam('user')){
                $this->_view->assign('_error', 'Debe introducir el usuario');
                $this->_view->render('edit_user', 'usuarios');
                exit;
            } else {
                if ($this->_usuariosModel->existUsernameWhitDifferentId($this->getPostParam('user'), $iduser)) {
                    $this->_view->assign('_error', 'Ya existe usuario con ese nombre');
                    $this->_view->render('edit_user', 'usuarios');
                    exit;
                }
            }

            if(!$this->getPostParam('email') || !$this->validateEmail($this->getPostParam('email'))){
                $this->_view->assign('_error', 'Debe introducir email válido');
                $this->_view->render('edit_user', 'usuarios');
                exit;
            } else {
                if ($this->_usuariosModel->existEmailUserWhitDifferentId($this->getPostParam('email'), $iduser)) {
                    $this->_view->assign('_error', 'Ya existe usuario con ese email');
                    $this->_view->render('edit_user', 'usuarios');
                    exit;
                }
            }

            if(!$this->getInt('role') == -1){
                $this->_view->assign('_error', 'Debe elegir un Role');
                $this->_view->render('edit_user', 'usuarios');
                exit;
            }

            if($this->getInt('disabled') == 1){
                $enabled = 0;
            } else {
                $enabled = 1;
            }

            $this->_usuariosModel->editUser($this->getPostParam('name'), $this->getPostParam('user'), $this->getPostParam('email'), $this->getInt('role'), $iduser);

            $this->redirect('configuracion/usuarios');

        }

        $this->_view->render('edit_user', 'usuarios');
    }

}

?>