<?php

class widgetsModel extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getWidgets()
	{
		return $this->_db->query("SELECT * FROM widgets")->fetchall(PDO::FETCH_ASSOC);
	}

	public function getWidget($carpeta)
	{
		$mod = $this->_db->query("SELECT * FROM widgets WHERE carpeta = '$carpeta'");
		return $mod->fetch();
	}

	public function getIdWidget($carpeta)
	{
		$mod = $this->_db->query("SELECT idwidget FROM widgets WHERE carpeta = '$carpeta'");
		return $mod->fetch();
	}

	public function agregarWidget($nombre, $carpeta, $descripcion, $autor, $version){
		$this->_db->query("INSERT INTO widgets (nombre,carpeta,descripcion,autor,version) VALUES ('$nombre', '$carpeta', '$descripcion', '$autor', '$version')");
	}

	public function agregarContents($idwidget, array $contents = null){
		$consulta = "INSERT INTO widgets_content (idwidget, stringid, position) VALUES ";
		end($contents);
		$lastElementKey = key($contents);
		$lastElementKeyString = $contents[$lastElementKey]['stringid'];
		foreach ($contents as $content) {
			$consulta .= "('$idwidget', '$content[stringid]', '$content[position]')";
			if($content['stringid'] !== $lastElementKeyString){
				$consulta .= ", ";
			}
		}
		$this->_db->query($consulta);
	}

	public function habilitar($idwidget){
		$this->_db->query("UPDATE widgets SET habilitado = 1 WHERE idwidget = $idwidget");
	}

	public function deshabilitar($idwidget){
		$this->_db->query("UPDATE widgets SET habilitado = 0 WHERE idwidget = $idwidget");
	}
}

?>