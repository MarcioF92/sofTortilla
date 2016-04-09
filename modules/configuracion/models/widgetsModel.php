<?php

class widgetsModel extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getWidgets(){
		return $this->_em->getRepository('WidgetEntity')->findAll();
	}

	public function getWidgetByDirectoryName($directory)
	{
		$widget = $this->_em->getRepository('WidgetEntity')->findOneBy(array('directory' => $directory));
		return $widget;
	}

	public function isActivated($directory){
		$widget = $this->_em->getRepository('WidgetEntity')->findOneBy(array('directory' => $directory));
		if ($widget) {
			return true;
		} else {
			return false;
		}
	}

	public function activate($directory){
		$widget = new WidgetEntity();
		$widget->setDirectory($directory);
		$this->_em->persist($widget);
		$this->_em->flush();
	}

	public function disactivate($directory){
		$widget = $this->_em->getRepository('WidgetEntity')->findOneBy(array('directory' => $directory));
		$this->_em->remove($widget);
		$this->_em->flush();
	}

}

?>