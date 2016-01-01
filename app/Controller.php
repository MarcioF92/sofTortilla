<?php
/* Clase abstracta de la que heredan todos los controladores */

abstract class Controller
{
    private $_registry;
	protected $_view;
    protected $_acl;
    protected $_request;
    protected $_data;

	public function __construct(){
        $this->_registry = Registry::getInstance();
        $this->_acl = $this->_registry->_acl;
        $this->_request = $this->_registry->_request;
		$this->_view = new View($this->_request, $this->_acl);
	}
	
    abstract public function index(); // Obliga a hijos implementar Index, el cual se usará por defecto

    protected function loadModel($model, $module = false)
    {
        $model = $model . 'Model';
        $rutaModel = ROOT . 'models' . DS . $model . '.php';

        if (!$module) {
            $module = $this->_request->getModule();
        }

        if ($module) {
           if ($module  != 'default') {
               $rutaModel = ROOT . 'modules' . DS . $module . DS . 'models' . DS . $model . '.php';
           }
        }
 
        if (is_readable($rutaModel)) {
            require_once $rutaModel;
            $model = new $model();
            return $model;
        } else {
            throw new Exception('Error de modelo');
        }
    }


    // Para Agregar librerías

    protected function getLibrary($library){
        $rutaLibrary = ROOT . 'libs' . DS . $library . '.php';

        if (is_readable($rutaLibrary)) {
            require_once $rutaLibrary;
        } else {
            throw new Exception("Error de Librería");
            
        }
    }

    protected function getText($key){ //Toma variable por post, filtra y devuelve filtrado
        if(isset($_POST[$key]) && !empty($_POST[$key])){
            $_POST[$key] = htmlspecialchars($_POST[$key], ENT_QUOTES);
            return $_POST[$key];
        } else {
            return "";
        }
    }

    protected function getInt($key){ // Filtra enteros que van por POST
        if(isset($_POST[$key]) && !empty($_POST[$key])){
            $_POST[$key] = filter_input(INPUT_POST, $key, FILTER_VALIDATE_INT);
            return $_POST[$key];
        } else {
            return 0;
        }
    }

    protected function redirect($path = false){
        if($path){
            header('Location: ' . BASE_URL . $path);
            exit;
        } else {
            header('Location: ' . BASE_URL);
            exit;
        }
    }

    protected function filterInt($int) { // Filtra enteros que van por GET
        $int = (int) $int;
        if(is_int($int)){
            return $int;
        } else {
            return -1;
        }
    }

    protected function getPostParam($key){
        if (isset($_POST[$key])) {
            return $_POST[$key];
        }
    }

    protected function getSql($key){ //Limpia los stringtags y evita inyecciones SQL
        if (isset($_POST[$key]) && !empty($_POST[$key])) {
            $_POST[$key] = strip_tags($_POST[$key]);

            if (!get_magic_quotes_gpc()) {
                $_POST[$key] = mysql_escape_string($_POST[$key]);
            }

            return trim($_POST[$key]);
        }
    }

    protected function getAlphaNum($key){ //Solo acepta caracteres A-Z, 0-9 y _
        if (isset($_POST[$key]) && !empty($_POST[$key])) {
            $_POST[$key] = (string) preg_replace('/[^A-Za-z0-9_]/i', '', $_POST[$key]);
            return trim($_POST[$key]);
        }
    }

    public function validateEmail($email){
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }

        return true;
    }

    public function dataController(){
        return $this->_data;
    }
}


?>