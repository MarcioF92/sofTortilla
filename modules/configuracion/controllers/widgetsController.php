<?php

class widgetsController extends Controller
{
	private $_widgetsModel;

    public function __construct()
    {
        parent::__construct();
        $this->_widgetsModel = $this->loadModel('widgets');
    }
 
    public function index()
    {

        $this->_acl->acceso('widgets');

        $this->_view->assign('titulo', 'Widgets');
        $widgets = array();

        if ($opendir = opendir('widgets')){
            while (($file = readdir($opendir)) !==FALSE){
                   $widgets[] = $file;
            }
        }

        foreach ($widgets as $w) {
            $w = (String) $w;
            if($w != '.' && $w != '..'){
                $row = $this->_widgetsModel->getWidget($w);
                if (!$row) {
                    $json = file_get_contents(BASE_URL . 'widgets/' . $w .'/data.json');
                    $array = json_decode($json,true);
                    $data = $array['WidgetDescription'];
                    if($data['information']['nombre'] & $data['information']['carpeta'] & $data['information']['descripcion'] & $data['information']['autor'] & $data['information']['version']){
                        $this->_widgetsModel->agregarWidget($data['information']['nombre'], $data['information']['carpeta'], $data['information']['descripcion'], $data['information']['autor'], $data['information']['version']);
                        $idwidget = $this->_widgetsModel->getIdWidget($data['information']['carpeta']);
                        $contents = $data['contents'];
                        $this->_widgetsModel->agregarContents($idwidget['idwidget'], $contents);
                    }
                }
            }
        }

        $this->_view->assign('wids', $this->_widgetsModel->getWidgets());
        $this->_view->render('index', 'widgets'); //Renderiza y manda el nombre de la vista
    }

    public function habilitar($idwidget){
    	$this->_widgetsModel->habilitar($idwidget);
    	$this->redireccionar('configuracion/widgets');
    }

    public function deshabilitar($idwidget){
    	$this->_widgetsModel->deshabilitar($idwidget);
    	$this->redireccionar('configuracion/widgets');
    }

}

?>