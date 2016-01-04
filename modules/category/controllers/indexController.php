<?php

class indexController extends Controller
{
	private $_categoryModel;

    public function __construct()
    {
        parent::__construct();
        $this->_categoryModel = $this->loadModel('category');
    }
 
    public function index()
    {	
    	$this->_view->assign('title', 'Category');
        $mensaje = $this->_categoryModel->insertCategory('Nombre Category');
        echo $mensaje;
    }

}

?>