<?php

class usuariosModel extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getUsuarios(){
		$usuarios = $this->_db->query("SELECT u.*, r.idrole FROM users u, roles r WHERE u.role = r.idrole");
		return $usuarios->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getUsuario($idusuario){
		$usuarios = $this->_db->query("SELECT u.*, r.role FROM usuarios u, roles r WHERE u.role = r.idrole AND u.idusuario = '$idusuario'");
		return $usuarios->fetch();
	}

	public function getPermisosUsuario($idusuario){
		$acl = new Acl($idusuario);
		return $acl->getPermisos();
	}

	public function getPermisosRole($idusuario){
		$acl = new Acl($idusuario);
		return $acl->getPermisosRole();
	}

	public function eliminarPermiso($idusuario, $idpermiso){
		$this->_db->query("DELETE FROM permisos_usuario WHERE idusuario = $idusuario AND idpermiso = $idpermiso");
	}

	public function editarPermiso($idusuario, $idpermiso, $valor){
		//$this->_db->query("replace into permisos_usuario set idusuario = $idusuario, idpermiso = $idpermiso, valor = '$valor'");
		$rows = $this->_db->query("SELECT * FROM permisos_usuario WHERE idusuario = $idusuario AND idpermiso = $idpermiso");
		$rows = $rows->fetch();
		if (!$rows) {
			$this->_db->query("INSERT INTO permisos_usuario (idusuario,idpermiso,valor) VALUES ($idusuario, $idpermiso, $valor)");
		} else {
			$this->_db->query("UPDATE permisos_usuario SET valor = $valor WHERE idusuario = $idusuario AND idpermiso = $idpermiso");
		}
	}

}

?>