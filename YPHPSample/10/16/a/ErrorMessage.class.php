<?php 

//エラー情報を格納するクラス
class ErrorMessage{
	private $message = [];
	
	function __construct(){
		$message = ["id" => "必須項目です", "password" => "数値を入力してください", "auth" => "IDとパスワードが間違っています"];
	}
	
	function is_error($x){
		
	}
	
	function getErrorMessage($x){
		return $message($x);
	}
}
var_dump($message);

?>