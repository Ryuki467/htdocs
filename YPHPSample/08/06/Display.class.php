<?php 

class Display{
	protected $data = [];
	
	protected function __construct($date){
		global $data;
		if(is_array($data)){
			$this->data = $data;
		}else{
			$this->data = [$data];
		}
	}
	
	public function show(){
		$this->showHeader();
		$this->showData();
		$this->showFooter();
	}
	protected function showHeader(){}
	protected function showData(){}
	protected function showFooter(){}
}

?>
