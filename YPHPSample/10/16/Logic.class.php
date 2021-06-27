<?php 
require_once("Validation.class.php");
//メインの処理を行うインスタンス

class Logic{
	//プロパティ（メンバ変数）の宣言
	public $data;
	public $request;
	public $session;
	public $view;
	public $auth;
	public $validation;
	public $error_massage;
	
	//コンストラクタ(オブジェクトが作成されるときに必ず行われるメゾット)の作成
	function __construct(){}
	
	//execute($action)関数を定義
	function execute($action){
	
		//インスタンスsession内のstart()関数にアクセス session_start()を実行 自身のメゾットを使用するためthisを記載
		$this->session->start();
		
		//getSessionParameters()関数にアクセス
		$this->getSessionParameters();
		
		//if($this->data->is_authenticated)がfalseでかつ、$actionが"auth"ではない場合 true
		if(!$this->is_authenticated() && $action != "auth"){
		
			$action = "login";
			
			//インスタンスrequest内のsetAction($action)関数にアクセス メンバ変数actionに$actionを代入 $this->action = $action;
			$this->request->setAction("login");
		}
		
		//Controller.class.php内の$template_name = "work16-".$action.".php" に代入
		switch($action){
			case "login":
			case "top":
			case "about":
			case "links":
				break;
			case "logout":
			
				//session内のclose関数にアクセス セッションに登録されたデータを全て破棄し、$_SESSIONを削除 session_destroy();unset($_SESSION);
				$this->session->close();
				
				//request内のsetAction($action)関数にアクセス メンバ変数actionに$actionを代入 $this->action = $action;
				$this->request->setAction("login");
				
				break;
			case "auth":
				//getPostParameters()関数にアクセス $this->data[$key]が存在している場合trueを返す
				$this->getPostParameters();
				
				//setDataToSession()関数にアクセス $_SESSION[$var]に$this->data->$varを代入
				$this->setDataToSession();
				
				//インスタンスvalidation内のcheck_id関数にアクセス IDとpasswordが空白でないか判断
				$this->validation->check_id();
				
				//インスタンスvalidation内のcheck_password関数にアクセス passwordが空白でなければ実行し、数字以外が記載されていないか判断
				$this->validation->check_password();
				
				//authenticate()関数がtrueなら
				if($this->authenticate()){
				
					//メンバ変数actionに"top"を代入
					$this->request->setAction("top");
					
				}else{
					//インスタンスvalidation内のcheck_auth関数にアクセス IDとpasswordが空白でなければ実行し、IDとpasswordが正しい値かどうか判断
					$this->validation->check_auth();
					
					//メンバ変数actionに"login"を代入
					$this->request->setAction("login");
					
				}
				break;
			default:
				$action = "error";
				//メンバ変数actionに"error"を代入
				$this->request->setAction("error");
				break;
		}
		//インスタンスview内のsetBaseTemplate($filename)関数にアクセス $base_template_filenameに work16-base-template.phpを代入
		$this->view->setBaseTemplate("work16-base-template.php");
		//インスタンスview内のrender($data)関数にアクセス 
		$this->view->render($this->data);
	}
	
	function getSessionParameters(){
		//$this->dataのプロパティを取得し、キーを$varsに代入
		$vars = array_keys(get_object_vars($this->data));
		//インスタンスsession内のgetParameter($key)関数にアクセスし、結果をインスタンスdataに代入 ? $_SESSIONが0もしくは空ではなく、かつ、$_SESSION[$key]に値が入っていたら、$_SESSION[$key]の値を返す
		foreach($vars as $var){
			$this->data->$var = $this->session->getParameter($var);
		}
	}
	function getPostParameters(){
		//$this->dataのプロパティを取得し、キーを$varsに代入
		$vars = array_keys(get_object_vars($this->data));
		//インスタンスrequest内のgetParameter($key)関数にアクセスし、結果をインスタンスdataに代入 ? $this->data[$key]が存在している場合trueを返す
		foreach($vars as $var){
			$this->data->$var = $this->request->getParameter($var);
		}
	}
	function setDataToSession(){
		//$this->dataのプロパティを取得し、キーを$varsに代入
		$vars = array_keys(get_object_vars($this->data));
		//インスタンスsession内のsetParameter($key,$value)関数にアクセス $_SESSION[$key]に$valueを代入
		foreach($vars as $var){
			$this->session->setParameter($var,$this->data->$var);
		}
	}
	function is_authenticated(){
		//インスタンスdata内にプロパティ is_authenticatedが含まれているかどうか ?
		if($this->data->is_authenticated){
			return true;
		}
		return false;
	}
	function authenticate(){
		//インスタンスauth内のauthenticate($id,$password)関数に$this->data->id, $this->data->passwordがはいるなら
		if($this->auth->authenticate($this->data->id, $this->data->password)){
			//インスタンスdata内のis_authenticatedメゾットにtrueを代入？
			$this->data->is_authenticated = true;
			//?
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
	function setValidation($validation){
		$this->validation = $validation;
	}
	function setErrorMessage($error_massage){
		$this->error_massage = $error_massage;
	}
}

//擬似変数this インスタンスを実装する時に自身のプロパティやメゾットにアクセスするために使用
//get_object_vars 指定したオブジェクトのプロパティを取得する
?>