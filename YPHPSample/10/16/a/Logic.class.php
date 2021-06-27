<?php 

//メインの処理を行うクラス
class Logic{
	//プロパティの宣言
	public $data;
	public $request;
	public $session;
	public $view;
	public $auth;
	public $vali;
	
	function __construct(){}
	function execute($action){
		$this->session->start();
		$this->getSessionParameters();
		
		if(!$this->is_authenticated() && $action != "auth"){
			$action = "login";
			$this->request->setAction("login");
		}
		
		switch($action){
			case "login":
			case "top":
			case "about":
			case "links":
				break;
			case "logout":
				$this->session->close();
				$this->request->setAction("login");
				break;
			case "auth":
				$this->getPostParameters();
				$this->setDataToSession();
				if($this->authenticate()){
					$this->request->setAction("top");
				}else{
					$this->request->setAction("login");
				}
				break;
			default:
				$action = "error";
				$this->request->setAction("error");
				break;
		}
		$this->view->setBaseTemplate("work16-base-template.php");
		$this->view->render($this->data);
	}
	
	function getSessionParameters(){
		$vars = array_keys(get_object_vars($this->data));
		foreach($vars as $var){
			$this->data->$var = $this->session->getParameter($var);
		}
	}
	function getPostParameters(){
		$vars = array_keys(get_object_vars($this->data));
		foreach($vars as $var){
			$this->data->$var = $this->request->getParameter($var);
		}
	}
	function setDataToSession(){
		$vars = array_keys(get_object_vars($this->data));
		foreach($vars as $var){
			$this->session->setParameter($var,$this->data->$var);
		}
	}
	function is_authenticated(){
		if($this->data->is_authenticated){
			return true;
		}
		return false;
	}
	function authenticate(){
		if($this->auth->authenticate($this->data->id, $this->data->password)){
			$this->data->is_authenticated = true;
			$this->session->setParameter("is_authenticated", true);
			return true;
		}
		return false;
	}
	
	function setData($data){
		$this->data = $data;
	}
	function setRequest($request){
		$this->request = $request;
	}
	function setSession($session){
		$this->session = $session;
	}
	function setView($view){
		$this->view = $view;
	}
	function setAuth($auth){
		$this->auth = $auth;
	}
	function setValidation($vali){
		$this->vali = $vali;
	}
}

?>