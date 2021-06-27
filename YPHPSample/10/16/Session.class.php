<?php 

//セッション処理を行うクラス
class Session{
	function __construct(){}
	
	function start(){
		session_start();
	}
	function close(){
		//セッションに登録されたデータを全て破棄する
		session_destroy();
		//指定した変数の値を削除する
		unset($_SESSION);
	}
	//$_SESSION[$key]に$valueを代入
	function setParameter($key,$value){
		$_SESSION[$key] = $value;
	}
	function getParameter($key){
		//$_SESSIONが0もしくは空ではなく、かつ、$_SESSION[$key]に値が入っていたら、$_SESSION[$key]の値を返す
		if(!empty($_SESSION) && isset($_SESSION[$key])){
			return $_SESSION[$key];
		}
	}
	function deleteParameter($key){
		if(!empty($_SESSION) && isset($_SESSION[$key])){
			unset($_SESSION[$key]);
		}
	}
}

//セッション サーバー側にデータを保存する仕組みのこと
//session_destroy セッションに登録されたデータを全て破棄する
//unset 指定した変数の値を削除する
?>