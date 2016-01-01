<?php

class menuWidget extends Widget{

	private $_model;


	public function __construct(){
		$this->_model = $this->loadModel('menu', 'menu');
	}

	public function getContent($menu, $view, array $args = null){
		$data['menu'] = $this->_model->getMenu($menu);
		return $this->render('menu', $view, $data);
	}

	public function getConfig($menu){
		$enabled = $this->enabled('menu');
		$menus['sidebar'] = array(
			'position' => 'sidebar',
			'show' => 'all',
			'hide' => array('registro'),
			'enabled' => $enabled
		);

		$menus['top'] = array(
			'position' => 'top',
			'show' => 'all',
			'enabled' => $enabled
		);

		return $menus[$menu];
	}

}

?>