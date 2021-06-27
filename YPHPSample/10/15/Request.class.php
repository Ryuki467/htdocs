<?php 

class Request{
	private $data;
	private $action;
	private $default_action = "login";
	
	function __construct(){
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			if(!empty($_POST)){
				$this->data = $_POST;
			}else{
				$this->data = [];
			}
		}else{
			if(!empty($_GET)){
				$this->data = $_GET;
			}else{
				$this->data = [];
			}
		}
		$this->setDefaultAction();
	}
	
	function getParameter($key){
		if(isset($this->data[$key])){
			return $this->data[$key];
		}
	}
	function setDefaultAction(){
		$this->action = $this->default_action;
		if(!empty($this->data) && isset($this->data["action"])){
			$this->action = $this->data["action"];
		}
	}
	
	function setAction($action){
		$this->action = $action;
	}
	function getAction(){
		return $this->action;
	}
}

?>