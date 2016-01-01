<?php
/* Clase para las sesiones */

class Session
{

	public static function init(){
		session_start();
	}

	public static function destroy($key = false){
		if($key){
			if(is_array($key)) {
				for($i = 0; $i < count($key); $i++){
					if(isset($_SESSION[$key[$i]])){
						unset($_SESSION[$key[$i]]);
					}
				}
			} else {
				if(isset($_SESSION[$key])){
						unset($_SESSION[$key]);
					}
			}
		} else {
			session_destroy();
		}
	}

	public static function set($key, $value){
		if (!empty($key)) {
			$_SESSION[$key] = $value;
		}
	}

	public static function get($key){
		if (isset($_SESSION[$key])) {
			return $_SESSION[$key];
		}
	}

	public static function acceso($level){
		if (!Session::get('authenticated')) {
			header("Location: " . BASE_URL . "error/access/5050");
			exit;
		} 

		Session::time();
		
		if (Session::getLevel($level) > Session::getLevel(Session::get('level'))) {
			header("Location: " . BASE_URL . "error/access/5050");
			exit;
		}
	}

	public static function accessView($level){
		if (!Session::get('authenticated')) {
			return false;
		} 

		if (Session::getLevel($level) > Session::getLevel(Session::get('level'))) {
			return false;
		}

		return true;
	}

	public static function getLevel($level){
		$role['admin'] = 3;
		$role['especial'] = 2;
		$role['usuario'] = 1;

		if (!array_key_exists($level, $role)) {
			throw new Exception('Error de Acceso');
		} else {
			return $role[$level];
		}
	}

	public static function strictAccess(array $level, $noAdmin = false){
		if (!Session::get('autenticado')) {
			header("Location: " . BASE_URL . "error/access/5050");
			exit;
		}

		Session::time();

		if ($noAdmin == false) {
			if(Session::get('level') == 'admin'){
				return;
			}
		}

		if(count($level)){
			if(in_array(Session::get('level'),$level)){
				return;
			}
		}

		header("Location: " . BASE_URL . "error/access/5050");
	}

	public static function strictAccessView(array $level, $noAdmin = false){
		if (!Session::get('autenticado')) {
			return false;
		}

		if ($noAdmin == false) {
			if(Session::get('level') == 'admin'){
				return true;
			}
		}

		if(count($level)){
			if(in_array(Session::get('level'),$level)){
				return true;
			}
		}

		return false;
	}

	public static function time(){
		if (!Session::get('time') || !defined('SESSION_TIME')) {
			throw new Exception('No se ha definido el tiempo de sesión');
		}

		if(SESSION_TIME == 0){
			return;
		}

		if (time() - Session::get('time') > (SESSION_TIME * 60)) {
			Session::destroy();
			header("Location: " . BASE_URL . 'error/access/8080');
		} else {
			Session::set('tiempo', time());
		}
	}
}
?>