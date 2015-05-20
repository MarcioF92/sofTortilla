<?php

//ini_set('display_errors',1); // Determina que se muestren los errores

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS); // Ruta raíz de la Appi
define('APP_PATH', ROOT . 'app' . DS );



try{
	require_once APP_PATH . 'Autoload.php';
	require_once APP_PATH . 'Config.php';

	Session::init();

	$registry = Registry::getInstancia();
	$registry->_request = new Request();
	$registry->_db = new Database(DB_HOST, DB_NAME, DB_USER, DB_PASS, DB_CHAR);
	$registry->_acl = new Acl();

	Bootstrap::run ($registry->_request);
}
	catch(Exception $e){
		$e->getMessage();
}

?>