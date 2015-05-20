<?php

/* Encargado de que se utilice el patrón singleton */

class Registry{

	private static $_instancia;
	private $_data;

	//Es private porque se asegura de que no se pueda crear una instancia de la clase
	private function __construct(){

	}

	//Singleton papá!!!
	public static function getInstancia(){
		if (!self::$_instancia instanceof self) {
			self::$_instancia = new Registry();
		}

		return self::$_instancia;
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