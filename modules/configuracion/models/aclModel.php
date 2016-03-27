<?php

class aclModel extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getRole($idrole){
		$role = $this->_em->getRepository('Role')->find($idrole);
		return $role;
	}

	public function getNombreRole($idrole){
		$role = $this->_db->query("SELECT role FROM roles WHERE idrole = $idrole");
		$role = $role->fetch();

		return $role['role'];
	}	

	public function getRoles(){
		$roles = $this->_em->getRepository('Role')->findAll();
		return $roles;
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

	public function insertarRole($name){
        $role = new Role();
        $role->setName($name);
    	$this->_em->persist($role);
    	$this->_em->flush();
    }

    public function getPermissions(){
        $permissions = $this->_em->getRepository('Permission')->findAll();
		return $permissions;

    }

    public function getPermission($idpermission){
        $permission = $this->_em->getRepository('Permission')->find($idpermission);
		return $permission;

    }

    public function insertarPermiso($name, $key){
        $permission = new Permission();
        $permission->setName($name);
        $permission->setPermissionKey($key);
    	$this->_em->persist($permission);
    	$this->_em->flush();
    }

    public function editPermission($name, $key, $idpermission){
        $permission = $this->_em->getRepository('Permission')->find($idpermission);
        $permission->setName($name);
        $permission->setPermissionKey($key);
    	$this->_em->persist($permission);
    	$this->_em->flush();
    }

    public function deletePermission($idpermission){
    	$permission = $this->_em->getRepository('Permission')->find($idpermission);
    	$this->_em->remove($permission);
    	$this->_em->flush();
    }

    public function editarRole($idrole, $name){
    	$role = $this->_em->getRepository('Role')->find($idrole);
    	$role->setName($name);
    	$this->_em->persist($role);
    	$this->_em->flush();
    }

    public function eliminarRole($idrole){
    	$role = $this->_em->getRepository('Role')->find($idrole);
    	$this->_em->remove($role);
    	$this->_em->flush();
    }

    public function roleHavePermission($idrole, $idpermission){
    	$role = $this->_em->getRepository('Role')->find($idrole);
    	$havePermission = $role->getPermissions()->contains($this->_em->getRepository('Permission')->find($idpermission));
    	return $havePermission;
    }

    public function addPermissionRole($idrole, $idpermission){
    	$role = $this->_em->getRepository('Role')->find($idrole);
    	$role->getPermissions()->add($this->_em->getRepository('Permission')->find($idpermission));
    	$this->_em->persist($role);
    	$this->_em->flush();
    }

    public function removePermissionRole($idrole, $idpermission){
		$role = $this->_em->getRepository('Role')->find($idrole);
    	$role->getPermissions()->removeElement($this->_em->getRepository('Permission')->find($idpermission));
    	$this->_em->persist($role);
    	$this->_em->flush();
	}

}

?>