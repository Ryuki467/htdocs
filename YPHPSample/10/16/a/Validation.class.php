<?php 

//入力チェックを行うためのクラス
class Validation{
	
	function Validation(){
		global $id;
		global $password;
		
		if(empty($_POST["id"])){
			echo"IDは必須項目です";
		}else if(empty($_POST["password"])){
			echo"パスワードは必須項目です";
		}else if(!is_numeric($_POST["password"])){
			echo"パスワードには数値を入力してください";
		}else if($_POST["id"] !== $id || $_POST["password"] !== $password){
			echo"IDとパスワードが間違っています";
		}
	}
}
var_dump($_POST["id"]);
var_dump($_POST["password"]);
?>
