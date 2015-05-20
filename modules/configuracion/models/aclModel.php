<?php

class aclModel extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getRole($idrole){
		$role = $this->_db->query("SELECT * FROM roles WHERE idrole = $idrole");
		return $role->fetch();
	}

	public function getNombreRole($idrole){
		$role = $this->_db->query("SELECT role FROM roles WHERE idrole = $idrole");
		$role = $role->fetch();

		return $role['role'];
	}	

	public function getRoles(){
		$role = $this->_db->query("SELECT * FROM roles");
		return $role->fetchAll();
	}

	public function getPermisosAll(){
		$permisos = $this->_db->query("SELECT * FROM permisos");
		$permisos = $permisos->fetchAll(PDO::FETCH_ASSOC);

		$data = array();

		for ($i=0; $i < count($permisos); $i++) { 
			if ($permisos[$i]['llave'] != '') {
				$key = $permisos[$i]['llave'];
				$data[$key] = array(
					'key' => $permisos[$i]['llave'],
					'valor' => 'x',
					'nombre' => $permisos[$i]['permiso'],
					'idpermiso' => $permisos[$i]['idpermiso']
					);
			}	
		}

		return $data;
	}

	public function getPermisosRole($idrole){
		$data = array();

		$permisos = $this->_db->query("SELECT * FROM permisos_role WHERE idrole = {$idrole}");
		$permisos = $permisos->fetchAll(PDO::FETCH_ASSOC);

		for ($i=0; $i < count($permisos); $i++) { 

			$key = $this->getPermisoKey($permisos[$i]['idpermiso']);

			if($key == ''){continue;}

			if ($permisos[$i]['valor'] == 1) {
				$v = true;
			} else {
				$v = false;
			}

			$data[$key] = array(
					'key' => $key,
					'valor' => $v,
					'nombre' => $this->getPermisoNombre($permisos[$i]['idpermiso']),
					'idpermiso' => $permisos[$i]['idpermiso']
			);

		}

		$todos = $this->getPermisosAll();

		$data = array_merge($todos, $data);

		return $data;
	}

	public function eliminarPermisoRole($idrole, $idpermiso){
		$this->_db->query("DELETE FROM permisos_role WHERE idrole = $idrole AND idpermiso = $idpermiso");
	}

	public function editarPermisoRole($idrole, $idpermiso, $valor){
		$rows = $this->_db->query("SELECT * FROM permisos_role WHERE idrole = $idrole AND idpermiso = $idpermiso");
		$rows = $rows->fetch();
		if (!$rows) {
			$this->_db->query("INSERT INTO permisos_role (idrole,idpermiso,valor) VALUES ($idrole, $idpermiso, $valor)");
		} else {

		$this->_db->query("UPDATE permisos_role SET valor = $valor WHERE idrole = $idrole AND idpermiso = $idpermiso");
		}
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

	public function insertarRole($role)
    {
        $this->_db->query("INSERT INTO roles VALUES(null, '{$role}')");
    }

    public function getPermisos()
    {
        $permisos = $this->_db->query("SELECT * FROM permisos");
        
        return $permisos->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertarPermiso($permiso, $llave)
    {
        $this->_db->query("INSERT INTO permisos VALUES (null, '{$permiso}', '{$llave}')");
    }

    public function editarRole($idrole, $nombre){
    	$this->_db->query("UPDATE roles SET role = '$nombre' WHERE idrole = $idrole");
    }
}

?>