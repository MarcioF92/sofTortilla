<?php

class categoryModel extends Model{

	public function __construct(){
		parent::__construct();
	}

	public function insertCategory($newProductName){
		$product = new Category();
		$product->setCategory($newProductName);

		$this->_em->persist($product);
		$this->_em->flush();

		return "Created Product with ID " . $product->getId() . "\n";
	}
}

?>