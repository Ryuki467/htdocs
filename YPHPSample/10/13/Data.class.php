<?php 

class Data{
	private $name = "";
	private $age = "";
	private $hobby = "";
	
	function __construct(){
		$this->getSessionValue();
		$this->getPostValue();
		$this->setSessionValue();
	}
	
	function getSessionValue(){
		if(!empty($_SESSION) && isset($_SESSION["name"])){
			$this->name = $_SESSION["name"];
		}
		if(!empty($_SESSION) && isset($_SESSION["age"])){
			$this->age = $_SESSION["age"];
		}
		if(!empty($_SESSION) && isset($_SESSION["hobby"])){
			$this->hobby = $_SESSION["hobby"];
		}
	}
	
	function setSessionValue(){
		$_SESSION["name"] = $this->name;
		$_SESSION["age"] = $this->age;
		$_SESSION["hobby"] = $this->hobby;
	}
	
	function getPostValue(){
		if(!empty($_POST) && isset($_POST["name"])){
			$this->name = $_POST["name"];
		}
		if(!empty($_POST) && isset($_POST["age"])){
			$this->age = $_POST["age"];
		}
		if(!empty($_POST) && isset($_POST["hobby"])){
			$this->hobby = $_POST["hobby"];
		}
	}
	function getName(){
		return $this->name;
	}
	function getAge(){
		return $this->age;
	}
	function getHobby(){
		return $this->hobby;
	}
}

?>