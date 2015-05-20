<?php
/* Clase de la que heredan todos los modelos */

class Model 
{
	private $_registry;
	protected $_db;

	public function __construct()
	{
		$this->_registry = Registry::getInstancia();
		$this->_db = $this->_registry->_db;
	}
}
?>