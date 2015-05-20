<?php

class postModel extends Model{

	public function __construct(){
		parent::__construct();
	}

	public function getPosts(){
		$post = $this->_db->query("SELECT * FROM posts");
		return $post->fetchall();
	}

	public function getUnPost($id){
		$id = (int) $id;
		$post = $this->_db->query("SELECT * FROM posts WHERE idpost = $id");
		return $post->fetchall();
	}

	public function insertarPost($titulo, $cuerpo, $imagen){
		$this->_db->prepare("INSERT INTO posts (titulo,cuerpo,imagen) values (:titulo, :cuerpo, :imagen)")
				->execute(array(
					':titulo' => $titulo, 
					':cuerpo' => $cuerpo,
					':imagen' => $imagen
					));
	}

	public function editarPost($id, $titulo, $cuerpo){
		$id = (int) $id;
		$this->_db->prepare("UPDATE posts SET titulo = :titulo, cuerpo = :cuerpo WHERE idpost = :id")
				->execute(array(
					':id' => $id,
					':titulo' => $titulo, 
					':cuerpo' => $cuerpo
					));
	}

	public function eliminarPost($id){
		$id = (int) $id;
		$this->_db->query("DELETE FROM posts WHERE idpost = $id");
	}

	public function insertarPrueba($nombre, $cuerpo, $pais, $ciudad){
		$this->_db->prepare("INSERT INTO posts (titulo,cuerpo,idpais,idciudad) values (:nombre,:cuerpo,:pais,:ciudad)")
				->execute(array(
					':nombre' => $nombre, 
					':cuerpo' => $cuerpo,
					':pais' => $pais, 
					':ciudad' => $ciudad
					));
	}

	public function getPrueba($condicion = ''){
		$post = $this->_db->query("SELECT r.*, p.nombre AS pais, c.nombre AS ciudad FROM posts r, paises p, ciudades c WHERE r.idpais = p.idpais AND r.idciudad = c.idciudad $condicion");
		return $post->fetchAll();
	}
}

?>