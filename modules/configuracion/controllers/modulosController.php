<?php

class modulosController extends Controller
{
	private $_modulosModel;

    public function __construct()
    {
        parent::__construct();
        $this->_modulosModel = $this->loadModel('modulos');
    }
 
    public function index()
    {

        $this->_acl->acceso('modulos');

        $this->_view->assign('titulo', 'Módulos');
        $modules = array();

        if ($opendir = opendir('modules')){
            while (($file = readdir($opendir)) !==FALSE){
                   $modules[] = $file;
            }
        }

        foreach ($modules as $m) {
            $m = (String) $m;
            if($m != '.' && $m != '..' && $m != 'configuracion'){
                $row = $this->_modulosModel->getModulo($m);
                if (!$row) {
                    $class =  $m . "Controller";
                    $clase = new $class;
                    $datos = $clase->datosController($clase);
                    $this->_modulosModel->agregarModulo($datos['nombre'], $datos['carpeta'], $datos['descripcion'], $datos['autor'], $datos['version']);
                }
            }
        }

        $this->_view->assign('modulos', $this->_modulosModel->getModulos());
        $this->_view->render('index', 'modulos'); //Renderiza y manda el nombre de la vista
    }

    public function habilitar($idmodulo){
    	$this->_modulosModel->habilitar($idmodulo);
    	$this->redireccionar('configuracion/modulos');
    }

    public function deshabilitar($idmodulo){
    	$this->_modulosModel->deshabilitar($idmodulo);
    	$this->redireccionar('configuracion/modulos');
    }

}

?>