<?php

class indexController extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }
 
    public function index()
    {
    	$this->_acl->access('admin_access');
        $this->_view->assign('titulo', 'Configuración');
        $this->_view->render('index', 'configuracion'); //Renderiza y manda el nombre de la vista

    }

}

?>