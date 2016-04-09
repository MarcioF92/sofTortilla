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
            $this->_view->assign('role', $_POST);
            
            if(!$this->getSql('role')){
                $this->_view->assign('_error', 'Debe introducir el nombre del role');
                $this->_view->render('nuevo_role', 'acl');
                exit;
            }
            
            $this->_aclm->addRole($this->getSql('role'));
            $this->redirect('configuracion/acl/roles');
        }
        
        $this->_view->render('nuevo_role', 'acl');
    }

    public function editar_role($idrole = false){
        if (!$idrole) {
            $this->redirect('configuracion/acl/roles');
        }
    	$this->_view->assign('titulo', 'Editar Role');
    	$this->_view->assign('role', $this->_aclm->getRole($idrole));
        
        if($this->getInt('guardar') == 1){
            $this->_view->assign('role', $_POST);
            
            if(!$this->getPostParam('name')){
                $this->_view->assign('_error', 'Debe introducir el nombre del role');
                $this->_view->render('editar_role', 'acl');
                exit;
            }

            $nombre = $this->getPostParam('name');
            
            $this->_aclm->editRole($idrole, $nombre);
            $this->redirect('configuracion/acl/roles');
        }
        
        $this->_view->render('editar_role', 'acl');
    }

    public function eliminar_role($idrole = false){
        if (!$idrole) {
            $this->redirect('configuracion/acl/roles');
        }
        $this->_view->assign('titulo', 'Eliminar Role');
        $this->_view->assign('role', $this->_aclm->getRole($idrole));

        if($this->getInt('aceptar') == 1){
            $this->_aclm->deleteRole($idrole);
            $this->redirect('configuracion/acl/roles');
        }

        if($this->getInt('cancelar') == 1){
            $this->redirect('configuracion/acl/roles');
        }

        $this->_view->render('eliminar_role', 'acl');
    }


    /*
    *
    *	Comienza la parte de la edicion de los Permisos
    *
    */

    public function permisos_role($idrole = false){
        if (!$idrole) {
            $this->redirect('configuracion/acl/roles');
        }
        $this->_view->assign('titulo', 'Administración de permisos Role');

        $this->_view->assign('role', $this->_aclm->getRole($idrole));
        $this->_view->assign('permissionsRole', $this->_aclm->getRole($idrole)->getPermissions());
        $this->_view->assign('permissions', $this->_aclm->getPermissions());
    	
        $permissions = $this->_aclm->getPermissions();

        if ($this->getInt('guardar') == 1) {
            foreach ($permissions as $permission) {
                if ($this->getInt("permission_" . $permission->getIdpermission()) == 1) {
                    if(!$this->_aclm->roleHavePermission($idrole, $permission->getIdpermission())){
                        $this->_aclm->addPermissionRole($idrole, $permission->getIdpermission());
                    }
                } else {
                    if($this->_aclm->roleHavePermission($idrole, $permission->getIdpermission())){
                        $this->_aclm->removePermissionRole($idrole, $permission->getIdpermission());
                    }
                }
            }
            $this->redirect('configuracion/acl/roles');
        }
    	
        $this->_view->render('permisos_role', 'acl');
    }

    public function permisos()
    {
        $this->_view->assign('titulo', 'Administracion de permisos');
        $this->_view->assign('permissions', $this->_aclm->getPermissions());
        $this->_view->render('permissions', 'acl');
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
            
            $this->_aclm->addPermission(
                    $this->getSql('permiso'), 
                    $this->getAlphaNum('llave')
                    );
            
            $this->redirect('configuracion/acl/permisos');
        }
        
        $this->_view->render('nuevo_permiso', 'acl');
    }

    public function eliminar_permiso($idpermission = false){
        if (!$idpermission) {
            $this->redirect('configuracion/acl/permisos');
        }
        $this->_view->assign('titulo', 'Eliminar permiso');
        $this->_view->assign('permission', $this->_aclm->getPermission($idpermission));

        if($this->getInt('aceptar') == 1){
            $this->_aclm->deletePermission($idpermission);
            $this->redirect('configuracion/acl/permisos');
        }

        if($this->getInt('cancelar') == 1){
            $this->redirect('configuracion/acl/permisos');
        }

        $this->_view->render('eliminar_permiso', 'acl');
    }

    public function editar_permiso($idpermission = false){
        if (!$idpermission) {
            $this->redirect('configuracion/acl/permisos');
        }
        $this->_view->assign('titulo', 'Editar permiso');
        $this->_view->assign('datos', $this->_aclm->getPermission($idpermission));

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
            
            $this->_aclm->editPermission(
                    $this->getSql('permiso'), 
                    $this->getAlphaNum('llave'),
                    $idpermission
                    );
            
            $this->redirect('configuracion/acl/permisos');
        }
        
        $this->_view->render('nuevo_permiso', 'acl');
    }

}

?>