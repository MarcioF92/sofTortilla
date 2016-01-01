<?php

class postModel extends Model{

	public function __construct(){
		parent::__construct();
	}

	public function getPosts(){
		$posts = $this->_db->query("SELECT v.*, p.* FROM posts_versions v INNER JOIN posts p ON v.idpost = p.idpost WHERE v.show = 1");
		return $posts->fetchall(PDO::FETCH_ASSOC);
	}

	public function getPost($url){
		$post = $this->_db->query("SELECT v.*, p.* FROM posts_revisions v INNER JOIN posts p ON v.idpost = p.idpost WHERE p.short_url = '$url'");
		return $post->fetch(PDO::FETCH_ASSOC);
	}

	public function getContent($url){
		$post = $this->_db->query("SELECT v.content FROM posts_versions v INNER JOIN posts p ON v.idpost = p.idpost WHERE p.idpost = '$idpost' AND v.show = 1");
		return $post->fetch();
	}

	public function existPost($url){
		$post = $this->_db->query("SELECT COUNT(*) AS cantidad FROM posts WHERE name = '$url' AND enable = 1")->fetch();
		if(intval($post['cantidad']) > 0){
			return true;
		} else {
			return false;
		}
	}

	/*public function insertarPost($titulo, $cuerpo, $imagen){
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
	}*/

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