<?php

class registroModel extends Model{

	public function __construct(){
		parent::__construct();
	}

	public function verificarUsuario($usuario){
		$id = $this->_db->query("SELECT * FROM usuarios WHERE usuario = '" . $usuario . "'");

		return $id->fetch();

	}

	public function verificarEmail($email){
		$id = $this->_db->query("SELECT * FROM usuarios WHERE email = '" . $email . "'");

		if ($id->fetch()) {
			return true;
		}

		return false;
	}

	public function registrarUsuario($nombre, $usuario, $password, $email){

		$random = rand(175689348, 999999999);


		$this->_db->prepare("INSERT INTO usuarios(nombre,usuario,pass,email,role,estado,fecha, codigo) VALUES (:nombre, :usuario, :password, :email, 3, 0, now(), :codigo)")
			->execute(array(
				':nombre' => $nombre,
				':usuario' => $usuario,
				':password' => Hash::getHash('sha1', $password, HASH_KEY),
				':email' => $email,
				':codigo' => $random
				));
	}

	public function getUsuario($id, $codigo){ // FALTA VALIDACIÓN 
		$usuario = $this->_db->query("SELECT * FROM usuarios WHERE idusuario = $id AND codigo = $codigo");

		return $usuario->fetch();
	}

	public function activarUsuario($id, $codigo){
		$this->_db->query("UPDATE usuarios set estado = 1 WHERE idusuario = $id AND codigo = $codigo") ;
	}
}

?>