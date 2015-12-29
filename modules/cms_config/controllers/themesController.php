<?php

class themesController extends Controller
{
	private _themesModel;

    public function __construct()
    {
        parent::__construct();
        //$this->_themesModel = $this->loadModel('themes');
    }
 
    public function index()
    {
    	$this->_acl->acceso('widgets'); /*
		*
		* HAY QUE HACER EL ACCESO CMS CONFIG
		*
    	*/
        $this->_view->assign('titulo', 'Themes Config');
        $this->_view->render('index', 'cms_config'); //Renderiza y manda el nombre de la vista

        $themes = array();

        if ($opendir = opendir('views/themes')){
            while (($file = readdir($opendir)) !==FALSE){
                   $themes[] = $file;
            }
        }

        foreach ($themes as $t) {
            $t = (String) $t;
            if($t != '.' && $t != '..'){
                $row = $this->_themesModel->getThemes($t);
                if (!$row) {
                    $json = file_get_contents(BASE_URL . 'views/themes' . $t .'/data.json');
                    $array = json_decode($json,true);
                    $data = $array['ThemeDescription'];
                    if($data['information']['nombre'] & $data['information']['carpeta']){

                        $this->_themesModel->agregarTheme($data['information']['nombre'], $data['information']['carpeta'], $data['information']['descripcion'], $data['information']['autor'], $data['information']['version']);
                        $idwidget = $this->_themesModel->getIdTheme($data['information']['carpeta']);
                        $this->_themesModel->agregarTheme($idwidget['idwidget'], $contents);
                    }
                }
            }
        }

    }

}

?>