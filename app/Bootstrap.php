<?php

/* Recibe los datos desde el Request.php y los envía al controlador solicitado */

class Bootstrap
{
	public static function run(Request $peticion)
	{
		$modulo = $peticion->getModulo();
		$controller = $peticion->getControlador() . 'Controller'; //Se elije Controlador
		
		$metodo = $peticion->getMetodo(); // El método que se recibe desde el Request
		$argumentos = $peticion->getArgumentos(); // Los Argumentos 

		if ($modulo) {
			$rutaModulo = ROOT . 'controllers' . DS . $modulo . 'Controller.php';

			if (is_readable($rutaModulo)) {
				require_once $rutaModulo;
				$rutaControlador = ROOT . 'modules' . DS . $modulo . DS . 'controllers' . DS . $controller . '.php';
			} else {
				throw new Exception('Error de base de modelo');
			}
		} else {
			$rutaControlador = ROOT . 'controllers' . DS . $controller . '.php'; // La ruta al mismo
		}

		if(is_readable($rutaControlador)){ // Verifica si el archivo existe y si es válido
			require_once $rutaControlador;

			$controller = new $controller;

			/* Si el método no es válido, se establece Index */
			if(is_callable(array($controller, $metodo))){
				$metodo = $peticion->getMetodo();
			} else {
				$metodo = 'index';
			}

			/* Si recibe los argumentos, los manda*/

			if(!empty($argumentos)){
				call_user_func_array(array($controller, $metodo), $argumentos); // Enviamos en un arreglo, nombre de la clase, método y Argumentos
			} else {
				call_user_func(array($controller, $metodo)); // Si no hay, manda solo el controlador y el método
			}
		} else {
			throw new Exception('No encontrado'); // Sino se encuentra, sale excepción
		}
	}
}

?>