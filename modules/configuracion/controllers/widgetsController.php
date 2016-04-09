<?php

class widgetsController extends Controller
{
	private $_widgetsModel;

    public function __construct(){
        parent::__construct();
        $this->_widgetsModel = $this->loadModel('widgets');
        $this->_acl->access('widgets');
    }
 
    public function index(){

        $this->_view->assign('titulo', 'Widgets');
        $widgetFolders = array();
        $widgets = array();

        if ($opendir = opendir('widgets')){
            while (($file = readdir($opendir)) !== FALSE){
                   $widgetFolders[] = $file;
            }
        }

        foreach ($widgetFolders as $widget) {
            $widget = (String) $widget;
            if($widget != '.' && $widget != '..'){
                if (file_exists(ROOT . DS . 'widgets' . DS . $widget . DS . 'data.json')) {
                    $json = file_get_contents(BASE_URL . 'widgets/' . $widget .'/data.json');
                    $arrayWidget = json_decode($json, true);
                    $arrayWidget['activated'] = $this->_widgetsModel->isActivated($widget);
                    $arrayWidget['directory'] = $widget;
                    $widgets[$widget] = $arrayWidget;
                }
            }
        }

        $this->_view->assign('widgetList', $widgets);
        $this->_view->render('index', 'widgets'); //Renderiza y manda el nombre de la vista
    }

    public function activate($directory = false){
        if (!$directory) {
            $this->redirect('configuracion/widgets');
        }
    	$this->_widgetsModel->activate($directory);
    	$this->redirect('configuracion/widgets');
    }

    public function disactivate($directory = false){
        if (!$directory) {
            $this->redirect('configuracion/widgets');
        }
    	$this->_widgetsModel->disactivate($directory);
        $this->redirect('configuracion/widgets');
    }

}

?>