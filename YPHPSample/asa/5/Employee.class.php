<?php 
class Employee {
	private $name;
	private $age;
	private $section;

	// ここにコンストラクタを定義する
	public function __construct($name, $age, $section){
		$this->name = $name;
		$this->age = $age;
		$this->section = $section;
	}

	// ここにメンバ変数のGETメソッドを定義する
	function getName(){
		return $this->name;
	}
	
	function getAge(){
		return $this->age;
	}
	
	function getSection(){
		return $this->section;
	}
}
