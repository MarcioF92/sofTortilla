<?php

class cms_configController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->_datos = array(
        	'nombre' => 'CMS Config',
        	'carpeta' => 'cms_config',
        	'autor' => 'Marcio Fuentes',
        	'descripcion' => 'Config de los contenidos',
        	'version' => '1.0',
        	);

    }
 
    public function index(){

    }

}

?>