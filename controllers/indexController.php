<?php

class indexController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
 
    public function index()
    {
        $this->_view->assign('titulo', 'Portada');
        $this->_view->render('index', 'inicio'); //Renderiza y manda el nombre de la vista
    }

}

?>