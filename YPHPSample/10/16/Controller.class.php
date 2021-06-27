<?php 
require_once("Session.class.php");
require_once("Request.class.php");
require_once("View.class.php");
require_once("Auth.class.php");
	
//各ファイルに指示出しをするクラス
class Controller{
	//プロパティ（メンバ変数）の宣言
	public static $logic;
	public static $session;
	public static $request;
	public static $view;
	public static $auth;
	public static $validation;
	
	static function execute(){
		//staticをつけたメンバ変数(11行目以降)のインスタンスを作成
		Controller::$session = new Session();
		Controller::$request = new Request();
		Controller::$view = new View();
		Controller::$auth = new Auth();
		Controller::$validation = new Validation();
		//staticをつけたインスタンス$logicが持つそれぞれのメゾットにアクセス
		//引数( ()内 )から処理
		Controller::$logic->setSession(Controller::$session);
		Controller::$logic->setRequest(Controller::$request);
		Controller::$logic->setView(Controller::$view);
		Controller::$logic->setAuth(Controller::$auth);
		Controller::$logic->setValidation(Controller::$validation);
		Controller::$logic->execute(Controller::$request->getAction());
		//staticをつけたメンバ変数 $viewが持つメゾットshow()にアクセス
		Controller::$view->show();
	}
	
	//getTemplateName関数を定義
	static function getTemplateName(){
		//$actionに
		$action = Controller::$request->getAction();
		$template_name = "work16-".$action.".php";
		return $template_name;
	}
	static function setLogic($logic){
		Controller::$logic = $logic;
	}
}

//プロパティ(クラス内変数)
?>