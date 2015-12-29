<?php

class indexController extends cms_configController
{

    public function __construct()
    {
        parent::__construct();
    }
 
    public function index()
    {

        $this->_view->assign('titulo', 'CMS Config');
        $this->_view->render('index', 'cms_config'); //Renderiza y manda el nombre de la vista

    }

}

?>