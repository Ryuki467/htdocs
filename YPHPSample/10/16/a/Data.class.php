<?php 

//データを保持するためのクラス
class Data{
	public $name = "";
	public $age = "";
	public $hobby = "";
	public $id;
	public $password;
	public $is_authenticated;
	
	function Data(){}
	
	function setId($id){
		$this->id = $id;
	}
	function setPassword($password){
		$this->password = $password;
	}
	function getId(){
		return $this->id;
	}
	function getPassword(){
		return $this->password;
	}
}

?>