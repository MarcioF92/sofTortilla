<?php

/* Procesa la URL */

 
class Request
{
    private $_module;
    private $_modules;
    private $_controller;
    private $_method;
    private $_args;
    private $_db;
 
    public function __construct()
    {
        if(isset($_GET['url'])){
            $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL); // Si existe URL, se eliminan todos los caracteres no permitidos 
            $url = explode('/', $url); // Crea Array y divide URL, separando elementos por barras queda de la forma controlador/metodo/argumento
            $url = array_filter($url); // Todos los elementos que no sean válidos en el array, se eliminan

            // Modulos de la app (TODO script para buscar carpetas solo)
            $this->_modules = array();

            if ($opendir = opendir('modules')){
                while (($file = readdir($opendir)) !==FALSE){
                       $this->_modules[] = $file;
                }
            }

            $this->_db = new Database(DB_HOST, DB_NAME, DB_USER, DB_PASS, DB_CHAR);

            // 1. Modulo, controlador, métodos argumentos
            // 2. Controlador, método, argumentos
 
            $this->_module = strtolower(array_shift($url));


            if (!$this->_module) {
                $this->_module = 'home';
            } else {
                if (count($this->_modules)) {
                    if (!in_array($this->_module, $this->_modules)) {                        
                        $this->_controller = $this->_module;
                        $this->_module = 'home';
                    } else {
                        $row = $this->_db->query("SELECT * FROM modules WHERE folder = '$this->_module'")->fetch();
                        if($row['enable'] == 1 || $this->_module == 'configuracion'){
                            $this->_controller = strtolower(array_shift($url)); // Tomamos la segunda posición del array como controlador

                            if (!$this->_controller) {
                                $this->_controller = 'index';
                            }

                        } else {
                            $this->_controller = 'index';
                            $this->_module = 'home';
                        }
                    }
                } else {
                    $this->_controller = $this->_module;
                    $this->_module = 'home';
                }
            }

            $this->_method = strtolower(array_shift($url)); // Toma la segunda como método
            $this->_args = $url; // Los argumentos de la URL
            
        }

        /* Si no existen controlador, método y argumentos, se utilizan los por defectos*/

        if(!$this->_controller){
            $this->_controller = DEFAULT_CONTROLLER;
        }
 
        if(!$this->_method){
            $this->_method = 'index';
        }
 
        if(!isset($this->_args)){
            $this->_args = array();
        }

    }

    // Métodos para obtener controladores de los atributos

    public function getModule()
    {
        return $this->_module;
    }
 
    public function getController()
    {
        return $this->_controller;
    }
 
    public function getMethod()
    {
        return $this->_method;
    }
 
    public function getArgs()
    {
        return $this->_args;
    }
}
?>