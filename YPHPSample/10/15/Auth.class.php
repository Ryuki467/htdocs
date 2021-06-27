<?php 

class Auth{
	private $id = "yamada";
	private $password = "13579";
	
	function __construct(){}
	
	function authenticate($id,$password){
		$result = $this->getAuthInfo();
		if($result["id"] === $id && $result["password"] === $password){
			return true;
		}
		return false;
	}
	function getAuthInfo(){
		return ["id" => $this->id, "password" => $this->password];
	}
}

?>