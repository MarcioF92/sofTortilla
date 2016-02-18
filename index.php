<?php

ini_set('display_errors',0); // Determina que se muestren los errores

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS); // Ruta raíz de la Appi
define('APP_PATH', ROOT . 'app' . DS );

try{	
	require_once APP_PATH . 'Autoload.php';
	require_once APP_PATH . 'Config.php';

	Session::init();

	$registry = Registry::getInstance();
	
	$registry->_request = new Request();

	$registry->_db = new Database(DB_HOST, DB_NAME, DB_USER, DB_PASS, DB_CHAR);

	$ddb = new Doctrine($registry->_request, DB_USER, DB_PASS, DB_HOST, DB_NAME);

	$registry->_em = $ddb->getEm();

	$registry->_i18n = new I18nator(ROOT . 'libs/i18n/lang/lang_{LANGUAGE}.' . LANGUAJE_EXT, ROOT . 'libs/i18n/langcache/', DEFAULT_LANGUAJE);
	$registry->_i18n->setForcedLang(DEFAULT_LANGUAJE);
	$registry->_i18n->init();

	$registry->_acl = new Acl();
	
	Bootstrap::run($registry->_request);
}
	catch(Exception $e){
		$e->getMessage();
}

?>