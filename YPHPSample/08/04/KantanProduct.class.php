<?php 
	require_once "Product.class.php"; 

class KantanProduct extends Product{
	private $carrier = "キャリア";
	private $maker = "メーカ";
	
	public function __construct($nm,$pr,$cr,$mk){
		parent::__construct($nm,$pr);
		$this->carrier = $cr;
		$this->maker = $mk;
		$this->setCategory("kantan");
	}
	
	public function getCarrier(){return $this->carrier;}
	public function getMaker(){return $this->maker;}
}

?>
