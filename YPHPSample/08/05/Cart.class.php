<?php 

class Cart{
	private $products = [];
	
	public function addCart($product, $unit){
		$this->products[$product->getName()] = ["product" => $product, "unit" => $unit];
	}
	
	public function getProducts(){return $this->products;}
	
	public function getProduct($name){
		$keys = array_keys($this->products);
		if(in_array($name,$keys)){
			return $this->products[$name]["product"];
		}
	}
	public function getProductUnit($name){
		$keys = array_keys($this->products);
		if(in_array($name,$keys)){
			return $this->products[$name]["unit"];
		}
	}
	public function getSubTotal($name){
		$keys = array_keys($this->products);
		if(in_array($name,$keys)){
			return $this->products[$name]["product"]->getPrice() * $this->products[$name]["unit"];
		}
	}
	
	public function getTotal(){
		$total = 0;
		foreach($this->products as $item){
			$price = $item["product"]->getPrice();
			$unit = $item["unit"];
			$subtotal = $price * $unit;
			$total += $subtotal;
		}
		return $total;
	}
}

?>
