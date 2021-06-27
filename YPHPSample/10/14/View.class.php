<?php 

class View{
	public $base_template_filename;
	public $content;
	
	function __construct(){}
	
	function setBaseTemplate($filename){
		$this->base_template_filename = $filename;
	}
	
	function render($data){
		ob_start();
		ob_implicit_flush(0);
		require_once($this->base_template_filename);
		$content = ob_get_clean();
		$this->content = $content;
	}
	function show(){
		echo $this->content;
	}
}

?>