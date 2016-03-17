<?php

class Acl
{
	private $_registry;
	private $_db;
	private $_iduser;
	private $_user;
	private $_idrole;
	private $_permissions;

	public function __construct($id = false){

		$this->_registry = Registry::getInstance();
		$this->_db = $this->_registry->_db;

		$this->_em = $this->_registry->_em;

		if($id){
			$this->_iduser = (int) $id;
		} else {
			if(Session::get('iduser')){
				$this->_iduser = Session::get('iduser');
				$this->_user = $this->_em->getRepository('User')->find($this->_iduser);
			} else {
				$this->_iduser = 0;
			}

		}

		if ($this->_iduser != 0) {
			$this->_idrole = $this->getRole();
			$this->_permissions = $this->getPermissionsRole();
			$this->compileAcl();
		}
		
		
	}

	public function compileAcl(){
		$this->_permissions =  array_merge($this->_permissions, $this->getPermissonsUser());
	}

	public function getRole(){
		return $this->_user->getRole()->getIdrole();
	}

	public function getPermissionsRoleId(){
		$permissions = $this->_user->getRole()->getPermissions();
		$id = [];

		foreach ($permissions as $permission) {
			$id[] = $permission->getIdPermission();
		}

		return $id;
	}

	public function getPermissionsRole(){
		$permissions = $this->_user->getRole()->getPermissions();
		
		$data = array();

		foreach ($permissions as $permission) {
			$key = $permission->getPermissionKey();
			if ($key == '') {
				continue;
			}

			$data[$key] = array(
				'key' => $key,
				'permision' => $permission->getName(),
				'value' => true,
				'inherited' => true,
				'idpermission' => $permission->getIdPermission()
			);

		}

		return $data;
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
				return true;	
		}

		return false;
	}

	public function access($key){
		if ($this->permission($key)) {
			Session::time();
			return;
		}

		header("location: " . BASE_URL . "error/access/error/5050");
		exit;
	}

}

?>