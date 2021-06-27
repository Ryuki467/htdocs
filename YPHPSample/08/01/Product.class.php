<?php

class Product{
	public $name = "名前";
	public $price = 100;
	
	public function setName($nm){
		$this->name = $nm;
	}
	public function setPrice($pr){
		$this->price = $pr;
	}
	function getName(){return $this->name;}
	function getPrice(){return $this->price;}
}

?>

</body>
</html>
