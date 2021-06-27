<?php 

//エラー情報を格納するクラス
class ErrorMessage{
	private $message = ["id" => "必須項目です", "password" => "数値を入力してください", "auth" => "IDとパスワードが間違っています"];
	public static $is_error_id;
	public static $is_error_password;
	public static $is_error_auth;
	
	function getErrorMessage($error_type){
		if($error_type == "auth"){
			return $this->message["auth"];
		}else if($error_type == "id"){
			return $this->message["id"];
		}else if($error_type == "password"){
			if(self::$is_error_password == "error1"){
				return $this->message["id"];
			}else if(self::$is_error_password == "error2"){
				return $this->message["password"];
			}
		}
	}
	
	function is_error_id($type){
		$this->is_error["id"] = $type;
	}
	
	function is_error_password($type){
		$this->is_error["password"] = $type;
	}
	
	function message_password($type){
		$this->message["password"] = $type;
	}
	
	function is_error_auth($type){
		$this->is_error["auth"] = $type;
	}
	function is_error($type){
		if($type == "auth"){
			if(self::$is_error_auth == true){
				return true;
			}
		}else if($type == "id"){
			if(self::$is_error_id == true){
				return true;
			}
		}else if($type == "password"){
			if(self::$is_error_password == "error1" || self::$is_error_password == "error2"){
				return true;
			}
		}
	}
	
	
	function is_error_delete(){
		$this->is_error = ["id" => false, "password" => false, "auth" => false];
	}
}

?>