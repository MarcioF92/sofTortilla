<?php

class Acl
{
	private $_registry;
	private $_db;
	private $_idusuario;
	private $_idrole;
	private $_permisos;

	public function __construct($id = false){
		if($id){
			$this->_idusuario = (int) $id;
		} else {
			if(Session::get('idusuario')){
				$this->_idusuario = Session::get('idusuario');
			} else {
				$this->_idusuario = 0;
			}
		}

		$this->_registry = Registry::getInstancia();
		$this->_db = $this->_registry->_db;
		$this->_idrole = $this->getRole();
		$this->_permisos = $this->getPermisosRole();
		$this->compilarAcl();
		
	}

	public function compilarAcl(){
		$this->_permisos =  array_merge($this->_permisos, $this->getPermisosUsuario());
	}

	public function getRole(){
		$role = $this->_db->query("SELECT role FROM usuarios WHERE idusuario = {$this->_idusuario}");
		$role = $role->fetch();

		return $role['role'];
	}

	public function getPermisosRoleId(){
		$ids = $this->_db->query("SELECT idpermiso FROM permisos_role WHERE idrole = '{$this->_idrole}'");
		$ids = $ids->fetchAll(PDO::FETCH_ASSOC);
		$id = [];
		for ($i=0; $i < count($ids); $i++) { 
			$id[] = $ids[$i]['idpermiso'];
		}

		return $id;
	}

	public function getPermisosRole(){
		$permisos = $this->_db->query("SELECT * FROM permisos_role WHERE idrole = '{$this->_idrole}'");

		$permisos = $permisos->fetchAll(PDO::FETCH_ASSOC);
		$data = array();

		for ($i=0; $i < count($permisos); $i++) {
			$key = $this->getPermisoKey($permisos[$i]['idpermiso']);
			if ($key == '') {
				continue;
			}

			if ($permisos[$i]['valor'] == 1) {
				$v = true;
			} else {
				$v = false;
			}

			$data[$key] = array(
				'key' => $key,
				'permiso' => $this->getPermisoNombre($permisos[$i]['idpermiso']),
				'valor' => $v,
				'heredado' => true,
				'idpermiso' => $permisos[$i]['idpermiso']
			);
		}

		return $data;
	}

	public function getPermisoKey($idpermiso){
		$idpermiso = (int) $idpermiso;

		$key = $this->_db->query("SELECT llave FROM permisos WHERE idpermiso = {$idpermiso}");
		$key = $key->fetch();
		return $key['llave'];
	}

	public function getPermisoNombre($idpermiso){
		$idpermiso = (int) $idpermiso;

		$key = $this->_db->query("SELECT permiso FROM permisos WHERE idpermiso = {$idpermiso}");
		$key = $key->fetch();
		return $key['permiso'];
	}

	public function getPermisosUsuario(){
		$ids = $this->getPermisosRoleId();

		$permisos = [];

		if (count($ids)) {
		
			$permisos = $this->_db->query("SELECT * FROM permisos_usuario WHERE idusuario = {$this->_idusuario} AND idpermiso in (" . implode(",", $ids) . ")");

			$permisos = $permisos->fetchAll(PDO::FETCH_ASSOC);
		}

		$data = array();

		for ($i=0; $i < count($permisos); $i++) {
			$key = $this->getPermisoKey($permisos[$i]['idpermiso']);
			if ($key == '') {
				continue;
			}

			if ($permisos[$i]['valor'] == 1) {
				$v = true;
			} else {
				$v = false;
			}

			$data[$key] = array(
				'key' => $key,
				'permiso' => $this->getPermisoNombre($permisos[$i]['idpermiso']),
				'valor' => $v,
				'heredado' => false,
				'idpermiso' => $permisos[$i]['idpermiso']
			);
		}

		return $data;
	}

	public function getPermisos(){
		if (isset($this->_permisos) && count($this->_permisos)) {
			return $this->_permisos;
		}
	}

	public function permiso($key){
		if (array_key_exists($key, $this->_permisos)) {
			if ($this->_permisos[$key]['valor'] == true || $this->_permisos[$key]['valor'] == 1) {
				return true;	
			}
		}

		return false;
	}

	public function acceso($key){
		if ($this->permiso($key)) {
			Session::tiempo();
			return;
		}

		header("location: " . BASE_URL . "error/access/5050");
		exit;
	}

}

?>