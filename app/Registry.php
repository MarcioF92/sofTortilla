<?php

/* Encargado de que se utilice el patrón singleton */

class Registry{

	private static $_instance;
	private $_data;

	//Es private porque se asegura de que no se pueda crear una instancia de la clase
	private function __construct(){

	}

	//Singleton papá!!!
	public static function getInstance(){
		if (!self::$_instance instanceof self) {
			self::$_instance = new Registry();
		}

		return self::$_instance;
	}

	public function __set($name, $value){
		$this->_data[$name] = $value;
	}

	public function __get($name){
		if (isset($this->_data[$name])) {
			return $this->_data[$name];
		}

		return false;
	}
}

?>