<?php
/* Clase de la que heredan todos los modelos */

class Model 
{
	private $_registry;
	protected $_db;
	protected $_em;

	public function __construct()
	{
		$this->_registry = Registry::getInstance();
		$this->_db = $this->_registry->_db;
		$this->_em = $this->_registry->_em;
	}
}
?>