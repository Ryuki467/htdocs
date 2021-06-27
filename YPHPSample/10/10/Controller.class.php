<?php 

class Controller{
	static function getAction(){
		if(empty($_POST)){
			$action = "form";
		}else if(isset($_POST["action"])){
			$action = $_POST["action"];
		}
		return $action;
	}
	
	static function getTemplateName(){
		$action = Controller::getAction();
		$template_name = "work10-" . $action . ".php";
		return $template_name;
	}
}

?>