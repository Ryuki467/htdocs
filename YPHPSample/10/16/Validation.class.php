<?php 
	require_once("ErrorMessage.class.php");
//入力チェックを行うためのクラス
class Validation{
	public $id = "yamada";
	public $password = "13579";
	public $error_message;
	
	function __construct(){
		$this->error_message = new ErrorMessage();
	}
	function check_id(){
		if($_POST["id"] == ""){
			//必須項目です
			ErrorMessage::$is_error_id = true;
		}else{
			ErrorMessage::$is_error_id = false;
		}
	}
	
	function check_password(){
		if($_POST["password"] == ""){
			//必須項目です
			ErrorMessage::$is_error_password = "error1";
			//$this->error_message->message_password("必須項目です");
		}else if(!is_numeric($_POST["password"])){
			//パスワードには数値を入力してください
			ErrorMessage::$is_error_password = "error2"; 
			//$this->error_message->message_password("数値を入力してください");
		}else{
			ErrorMessage::$is_error_password = false;
		}
	}
	
	function check_auth(){
		if(!empty($_POST["id"]) && !empty($_POST["password"])){
			if(is_numeric($_POST["password"])){
				if($_POST["id"] !== $this->id || $_POST["password"] !== $this->password){
					//IDとパスワードが間違っています
					ErrorMessage::$is_error_auth = true;
				}else{
					ErrorMessage::$is_error_auth = false;
				}
			}
		}
	}
}

?>