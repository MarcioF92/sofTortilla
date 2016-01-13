<?php

class indexController extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }
 
    public function index(){
    	$this->_view->assign('titulo', $this->getI18nValue('greeting'));
    	$this->_view->render('index', 'i18n');
    }
}

?>