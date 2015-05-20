<?php

function autoloadCore($class){
	if (file_exists(APP_PATH . ucfirst(strtolower($class)) . '.php')) {
		include_once APP_PATH . ucfirst(strtolower($class)) . '.php';
	}
}

function autoloadLibs($class){
	if (file_exists(ROOT . 'libs' . DS . 'class.' . strtolower($class) . '.php')) {
		include_once ROOT . 'libs' . DS . 'class.' . strtolower($class) . '.php';
	} 
}

function autoloadControllers($class){
	if (file_exists(ROOT . 'controllers' . DS . $class . '.php')) {
		include_once ROOT . 'controllers' . DS . $class . '.php';
	} 
}

function autoloadWidgets($class){
	$clase = substr($class, 0, -6);
	if (file_exists(ROOT . 'widgets' . DS . $clase . DS . $clase . '.php')) {
		include_once ROOT . 'widgets' . DS . $clase . DS . $clase . '.php';
	} 
}

spl_autoload_register("autoloadCore");
spl_autoload_register("autoloadLibs");
spl_autoload_register("autoloadControllers");
spl_autoload_register("autoloadWidgets");

?>