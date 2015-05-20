<?php

class ajaxModel extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getPaises(){
		$paises = $this->_db->query("SELECT * FROM paises");

		return $paises->fetchAll();
	}

	public function getCiudades($idpais){
		$ciudades = $this->_db->query("SELECT * FROM ciudades WHERE idpais = {$idpais}");

		$ciudades->setFetchMode(PDO::FETCH_ASSOC);
		return $ciudades->fetchAll();
	}

	public function insertarCiudad($ciudad, $idpais){
		$this->_db->query("INSERT INTO ciudades (idpais,nombre) VALUES ('{$idpais}','{$ciudad}')");
	}



}

?>