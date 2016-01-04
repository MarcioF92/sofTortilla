<?php

/* Recibe los datos desde el Request.php y los envía al controlador solicitado */

class Bootstrap
{
	public static function run(Request $petition)
	{
		$module = $petition->getModule();
		$controller = $petition->getController() . 'Controller'; //Se elije Controlador
		
		$method = $petition->getMethod(); // El método que se recibe desde el Request
		$args = $petition->getArgs(); // Los Argumentos 

		if (isset($module)){
			if (isset($controller)) {
				$pathModuleController = ROOT . 'modules' . DS . $module . DS . 'controllers' . DS . $controller . '.php';
			} else {
				$pathModuleController = ROOT . 'modules' . DS . $module . DS . 'controllers' . DS . 'indexController.php';
			}

			if (is_readable($pathModuleController)) {
				require_once $pathModuleController;
				
			} else {
				throw new Exception('Error de base de modelo');
			}

		} else {

			throw new Exception('Error de base de modelo');
		}

		/*if(is_readable($rutaController)){ // Verifica si el archivo existe y si es válido
			require_once $rutaController;
		} else {
			$controller = 'indexController';
			require_once ROOT . 'controllers' . DS . 'indexController.php'; // Sino se encuentra, sale excepción
		}*/

			$controller = new $controller;

			/* Si el método no es válido, se establece Index */
			if(is_callable(array($controller, $method))){
				$method = $petition->getMethod();
			} else {
				$method = 'index';
			}


			/* Si recibe los argumentos, los manda*/

			if(!empty($args)){
				call_user_func_array(array($controller, $method), $args); // Enviamos en un arreglo, nombre de la clase, método y Argumentos
			} else {
				call_user_func(array($controller, $method)); // Si no hay, manda solo el controlador y el método
			}
		
	}
}

?>