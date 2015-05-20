<?php

/* Procesa la URL */

 
class Request
{
    private $_modulo;
    private $_modules;
    private $_controlador;
    private $_metodo;
    private $_argumentos;
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
 
            $this->_modulo = strtolower(array_shift($url));

            if (!$this->_modulo) {
                $this->_modulo = false;
            } else {
                if (count($this->_modules)) {
                    if (!in_array($this->_modulo, $this->_modules)) {                        
                        $this->_controlador = $this->_modulo;
                        $this->_modulo = false;
                    } else {
                        $row = $this->_db->query("SELECT * FROM modulos WHERE carpeta = '$this->_modulo'")->fetch();
                        if($row['habilitado'] == 1 || $this->_modulo == 'configuracion'){
                            $this->_controlador = strtolower(array_shift($url)); // Tomamos la segunda posición del array como controlador

                            if (!$this->_controlador) {
                                $this->_controlador = 'index';
                            }

                        } else {
                            $this->_controlador = 'index';
                            $this->_modulo = false;
                        }
                    }
                } else {
                    $this->_controlador = $this->_modulo;
                    $this->_modulo = false;
                }
            }

            $this->_metodo = strtolower(array_shift($url)); // Toma la segunda como método
            $this->_argumentos = $url; // Los argumentos de la URL
            
        }

        /* Si no existen controlador, método y argumentos, se utilizan los por defectos*/

        if(!$this->_controlador){
            $this->_controlador = DEFAULT_CONTROLLER;
        }
 
        if(!$this->_metodo){
            $this->_metodo = 'index';
        }
 
        if(!isset($this->_argumentos)){
            $this->_argumentos = array();
        }

    }

    // Métodos para obtener controladores de los atributos

    public function getModulo()
    {
        return $this->_modulo;
    }
 
    public function getControlador()
    {
        return $this->_controlador;
    }
 
    public function getMetodo()
    {
        return $this->_metodo;
    }
 
    public function getArgumentos()
    {
        return $this->_argumentos;
    }
}
?>