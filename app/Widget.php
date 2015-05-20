<?php

abstract class Widget
{
	protected $_datos;
	private $_registry;
    private $_db;

	protected function loadModel($model, $widget)
	{		
		if(is_readable(ROOT . 'widgets' . DS . $widget . DS . 'models' . DS . $model . '.php')){
			include_once ROOT . 'widgets' . DS . $widget . DS . 'models' . DS . $model . '.php';

			$modelClass = $model . 'WidgetModel';

			if (class_exists($modelClass)) {
				return new $modelClass;
			}
		}

		throw new Exception("Error de modelo de Widget");
		
	}

	protected function render($widget, $view, $data = array(), $ext = 'php'){

		if(is_readable(ROOT . 'widgets' . DS . $widget . DS . 'views' . DS . $view . '.' . $ext)){
			ob_start();
			extract($data);
			include ROOT . 'widgets' . DS . $widget . DS . 'views' . DS . $view . '.' . $ext;
			$content = ob_get_contents();
			ob_end_clean();

			return $content;
		}

		throw new Exception("Error de la vista del widget");

	}

    public function habilitado($widget){
    	$this->_registry = Registry::getInstancia();
        $this->_db = $this->_registry->_db;
        $rowObj = $this->_db->query("SELECT * FROM widgets WHERE carpeta = '$widget' AND habilitado = 1");
        $row = $rowObj->fetch();
        if ($row && count($row)) {
        	return 1;
        } else {
        	return 0;
        }
    }

    protected function getContent(){}
    protected function getConfig(){}

}

?>