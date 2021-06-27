<?php 
	require_once "Display.class.php"; 

class ListDisplay extends Display{	
	public function __construct($data){
		parent::__construct($data);
	}
	
	protected function showHeader(){
		echo"<dl>";
	}
	protected function showData(){
		foreach($this->data as $key => $value){
			echo"<dl>{$key}</dl>";
			echo"<dd>{$value}</dd>";
		}
	}
	protected function showFooter(){
		echo"</dl>";
	}
}

?>
