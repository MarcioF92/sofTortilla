<?php

class usuariosModel extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getUsers(){
		$users = $this->_em->getRepository('User')->findAll();
		return $users;
	}

	public function getUser($iduser){
		$user = $this->_em->getRepository('User')->find($iduser);
		return $user;
	}

	public function getUserByEmail($email){
		$user = $this->_em->getRepository('User')->findOneBy(array('email' => $email));
		return $user;
	}

	public function getUserByUsername($username){
		$user = $this->_em->getRepository('User')->findOneBy(array('user' => $username));
		return $user;
	}

	public function existEmailUserWithDifferentId($email, $iduser = false){
		$user = $this->getUserByEmail($email);
		if($user && $user->getIduser() != $iduser){
			return true;
		} else {
			return false;
		}
	}

	public function existUsernameWithDifferentId($username, $iduser = false){
		$user = $this->getUserByUsername($username);
		if($user && $user->getIduser() != $iduser){
			return true;
		} else {
			return false;
		}
	}

	public function getRoles(){
		$role = $this->_em->getRepository('Role')->findAll();
		return $role;
	}

	public function addUser($name, $username, $password, $email, $role, $enabled){
		$user = new User();
		$user->setName($name);
		$user->setUser($username);
		$user->setPassword(Hash::getHash('sha1',$password, HASH_KEY));
		$user->setEmail($email);
		$user->setRole($this->_em->getRepository('Role')->find($role));
		$user->setDate(new \DateTime("now"));
		$user->setCode(rand(100000000, 999999999));
		$user->setEnabled($enabled);
		$this->_em->persist($user);
		$this->_em->flush();
	}

	public function deleteUser($iduser){
		$user = $this->_em->getRepository('User')->find($iduser);
		$this->_em->remove($user);
		$this->_em->flush();
	}

	public function editUser($name, $username, $email, $role, $iduser){
		$user = $this->_em->getRepository('User')->find($iduser);
		$user->setName($name);
		$user->setUser($username);
		$user->setEmail($email);
		$user->setRole($this->_em->getRepository('Role')->find($role));
		$this->_em->persist($user);
		$this->_em->flush();
	}

	public function getPermissions(){
		$permissions = $this->_em->getRepository('Permission')->findAll();
		return $permissions;
	}

	public function updatePermissions($enabled, $disabled, $iduser){
		$user = $this->_em->getRepository('User')->find($iduser);
		foreach ($enabled as $permission) {
			if (!$this->havePermission($user, $permission)) {
				$this->addPermission($user, $permission);
			}
		}
		foreach ($disabled as $permission) {
			if ($this->havePermission($user, $permission)) {
				$this->removeElement($user, $permission);
			}
		}
		$this->_em->persist($user);
		$this->_em->flush();
	}

	public function havePermission($user, $permission){		
		return $user->getPermissions()->contains($permission);
	}

	public function addPermission($user, $permission){
		$user->getPermissions()->add($permission);
	}

	public function removePermission($user, $permission){
		$user->getPermissions()->removeElement($permission);
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