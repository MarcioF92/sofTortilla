<?php

class noticiaModel extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getNoticias()
	{
		$post = $this->_db->query("SELECT * FROM noticias");
		return $this->_db->query("SELECT * FROM noticias")->fetchall();
	}
}

?>