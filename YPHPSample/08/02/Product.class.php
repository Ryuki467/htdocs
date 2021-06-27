<?php

class Product{
	public $name = "名前";
	public $price = 100;
	
	public function __construct($nm,$pr){
		$this->name = $nm;
		$this->price = $pr;
	}
	
	public function setName($nm){
		$this->name = $nm;
	}
	public function setPrice($pr){
		$this->price = $pr;
	}
	public function getName(){return $this->name;}
	public function getPrice(){return $this->price;}
}

?>

</body>
</html>
