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
	

	public function getRoles(){
		$roles = $this->_em->getRepository('Role')->findAll();
		return $roles;
	}

	public function addRole($name){
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

    public function addPermission($name, $key){
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

    public function editRole($idrole, $name){
    	$role = $this->_em->getRepository('Role')->find($idrole);
    	$role->setName($name);
    	$this->_em->persist($role);
    	$this->_em->flush();
    }

    public function deleteRole($idrole){
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