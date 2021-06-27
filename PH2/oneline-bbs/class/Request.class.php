<?php 
//リクエスト情報を処理するクラス
class Request{
	private $post;
	
	function __construct(){
		if(!empty($_POST)){
		    $this->post = $_POST;
		}else{
		    $this->post = [];
		}
	}
	
	function getParameter($key){
	    if(isset($this->post[$key])){
	        return $this->post[$key];
		}
	}
	
	function setAction($action){
		//メンバ変数actionに$actionを代入
	    $this->post["action"] = $action;
	}
	
	function getAction(){
	    $action = "form";
	    if(!empty($this->post) && isset($this->post["action"])){
	        $action = $this->post["action"];
	    }
		return $action;
	}
}