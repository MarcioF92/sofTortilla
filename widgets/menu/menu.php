<?php

class menuWidget extends Widget{

	private $_modelo;


	public function __construct(){
		$this->_modelo = $this->loadModel('menu', 'menu');
	}

	public function getContent($menu, $view, array $args = null){
		$data['menu'] = $this->_modelo->getMenu($menu);
		return $this->render('menu', $view, $data);
	}

	public function getConfig($menu){
		$habilitado = $this->habilitado('menu');
		$menus['sidebar'] = array(
			'position' => 'sidebar',
			'show' => 'all',
			'hide' => array('registro'),
			'habilitado' => $habilitado
		);

		$menus['top'] = array(
			'position' => 'top',
			'show' => 'all',
			'habilitado' => $habilitado
		);

		return $menus[$menu];
	}

}

?>