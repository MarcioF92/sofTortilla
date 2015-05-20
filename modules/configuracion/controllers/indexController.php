<?php

class indexController extends configuracionController
{

    public function __construct()
    {
        parent::__construct();
    }
 
    public function index()
    {

        $this->_view->assign('titulo', 'Configuración');
        $this->_view->render('index', 'configuracion'); //Renderiza y manda el nombre de la vista

    }

}

?>