<?php 

class Data{
	public $name = "";
	public $age = "";
	public $hobby = "";
	
	function __construct(){}
	
	function setName(){
		$this->name = $name;
	}
	function setAge(){
		$this->age = $age;
	}
	function setHobby(){
		$this->hobby = $hobby;
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