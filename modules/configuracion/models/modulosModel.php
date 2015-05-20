<?php

class modulosModel extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getModulos()
	{
		return $this->_db->query("SELECT * FROM modulos")->fetchall(PDO::FETCH_ASSOC);
	}

	public function getModulo($carpeta)
	{
		$mod = $this->_db->query("SELECT * FROM modulos WHERE carpeta = '$carpeta'");
		return $mod->fetch();
	}

	public function agregarModulo($nombre, $carpeta, $descripcion, $autor, $version){
		$this->_db->query("INSERT INTO modulos (nombre,carpeta,descripcion,autor,version) VALUES ('$nombre', '$carpeta', '$descripcion', '$autor', '$version')");
	}

	public function habilitar($idmodulo){
		$this->_db->query("UPDATE modulos SET habilitado = 1 WHERE idmodulo = $idmodulo");
	}

	public function deshabilitar($idmodulo){
		$this->_db->query("UPDATE modulos SET habilitado = 0 WHERE idmodulo = $idmodulo");
	}
}

?>