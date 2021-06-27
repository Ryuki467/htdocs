<?php 
	require_once "Display.class.php"; 

class TableDisplay extends Display{	
	public function __construct($data){
		parent::__construct($data);
	}
	
	protected function showHeader(){
		echo"<table border = \"1\">";
	}
	protected function showData(){
		foreach($this->data as $key => $value){
			echo"<tr>";
			echo"<th>{$key}</th>";
			echo"<td>{$value}</td>";
			echo"</tr>";
		}
	}
	protected function showFooter(){
		echo"</table>";
	}
}

?>
