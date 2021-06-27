<?php
	require_once "Category.class.php"; 

class Product{
	protected $name = "名前";
	protected $price = "金額";
	protected $category = "カテゴリーオブジェクト";
	
	public function __construct($nm,$pr){
		$this->name = $nm;
		$this->price = $pr;
	}
	
	public function getName(){return $this->name;}
	public function getPrice(){return $this->price;}
	
	public function setCategory($category_key){
		$category = new Category();
		$category -> setCategoryKey($category_key);
		$this->category = $category;
	}
	
	public function getCategoryKey(){return $this->category->getCategoryKey();}
	public function getCategoryName(){return $this->category->getCategoryName();}

}

?>
