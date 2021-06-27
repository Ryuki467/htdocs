<?php require "Product.class.php"; 

class SmartPhoneProduct extends Product{
	private $carrier = "キャリア";
	private $maker = "メーカ";
	
	public function __construct($nm,$pr,$cr,$mk){
		parent::__construct($nm,$pr);
		$this->carrier = $cr;
		$this->maker = $mk;
	}
	
	public function getCarrier(){return $this->carrier;}
	public function getMaker(){return $this->maker;}
}

?>
