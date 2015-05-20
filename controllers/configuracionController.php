<?php

class configuracionController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->_datos = array(
        	'nombre' => 'Configuración',
        	'carpeta' => 'configuracion',
        	'autor' => 'Marcio Fuentes',
        	'descripcion' => 'Config de la App',
        	'version' => '1.0',
        	);

    }
 
    public function index()
    {

    }

}

?>