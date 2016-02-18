<?php

class Acl
{
	private $_registry;
	private $_db;
	private $_iduser;
	private $_idrole;
	private $_permissions;

	public function __construct($id = false){
		if($id){
			$this->_iduser = (int) $id;
		} else {
			if(Session::get('idusuario')){
				$this->_iduser = Session::get('idusuario');
			} else {
				$this->_iduser = 0;
			}
		}

		$this->_registry = Registry::getInstance();
		$this->_db = $this->_registry->_db;

		$this->_em = $this->_registry->_em;

		$this->_idrole = $this->getRole();
		$this->_permissions = $this->getPermissionsRole();
		$this->compileAcl();
		
	}

	public function compileAcl(){
		$this->_permissions =  array_merge($this->_permissions, $this->getPermissonsUser());
	}

	public function getRole(){
		$role = $this->_db->query("SELECT role FROM users WHERE iduser = {$this->_iduser}");
		$role = $role->fetch();

		return $role['role'];
	}

	public function getPermissionsRoleId(){
		$ids = $this->_db->query("SELECT idpermission FROM permissions_role WHERE idrole = '{$this->_idrole}'");
		$ids = $ids->fetchAll(PDO::FETCH_ASSOC);
		$id = [];
		for ($i=0; $i < count($ids); $i++) { 
			$id[] = $ids[$i]['idpermission'];
		}

		return $id;
	}

	public function getPermissionsRole(){
		$permissions = $this->_db->query("SELECT * FROM permissions_role WHERE idrole = '{$this->_idrole}'");

		$permissions = $permissions->fetchAll(PDO::FETCH_ASSOC);
		$data = array();

		for ($i=0; $i < count($permissions); $i++) {
			$key = $this->getPermissionKey($permissions[$i]['idpermission']);
			if ($key == '') {
				continue;
			}

			if ($permissions[$i]['value'] == 1) {
				$v = true;
			} else {
				$v = false;
			}

			$data[$key] = array(
				'key' => $key,
				'permision' => $this->getPermissionName($permissions[$i]['idpermission']),
				'value' => $v,
				'inherited' => true,
				'idpermission' => $permissions[$i]['idpermission']
			);
		}

		return $data;
	}

	public function getPermissionKey($idpermission){
		$idpermission = (int) $idpermission;

		$key = $this->_db->query("SELECT permission_key FROM permissions WHERE idpermission = {$idpermission}");
		$key = $key->fetch();
		return $key['permission_key'];
	}

	public function getPermissionName($idpermission){
		$idpermission = (int) $idpermission;

		$key = $this->_db->query("SELECT name FROM permissions WHERE idpermission = {$idpermission}");
		$key = $key->fetch();
		return $key['name'];
	}

	public function getPermissonsUser(){
		$ids = $this->getPermissionsRoleId();

		$permissions = [];

		if (count($ids)) {
		
			$permissions = $this->_db->query("SELECT * FROM permissions_user WHERE iduser = {$this->_iduser} AND idpermission in (" . implode(",", $ids) . ")");

			$permissions = $permissions->fetchAll(PDO::FETCH_ASSOC);
		}

		$data = array();

		for ($i=0; $i < count($permissions); $i++) {
			$key = $this->getPermissionKey($permissions[$i]['idpermission']);
			if ($key == '') {
				continue;
			}

			if ($permissions[$i]['value'] == 1) {
				$v = true;
			} else {
				$v = false;
			}

			$data[$key] = array(
				'key' => $key,
				'permission' => $this->getPermissionName($permissions[$i]['idpermission']),
				'value' => $v,
				'inherited' => false,
				'idpermission' => $permissions[$i]['idpermission']
			);
		}

		return $data;
	}

	public function getPermissions(){
		if (isset($this->_permissions) && count($this->_permissions)) {
			return $this->_permissions;
		}
	}

	public function permission($key){
		if (array_key_exists($key, $this->_permissions)) {
			if ($this->_permissions[$key]['value'] == true || $this->_permissions[$key]['value'] == 1) {
				return true;	
			}
		}

		return false;
	}

	public function access($key){
		if ($this->permission($key)) {
			Session::tiempo();
			return;
		}

		header("location: " . BASE_URL . "error/access/5050");
		exit;
	}

}

?>