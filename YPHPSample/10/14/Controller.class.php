<?php 
require_once("Session.class.php");
require_once("Request.class.php");
require_once("View.class.php");
	
class Controller{
	public static $logic;
	public static $session;
	public static $request;
	public static $view;
	
	static function execute(){
		self::$session = new Session();
		self::$request = new Request();
		self::$view = new View();
		self::$logic->setSession(Controller::$session);
		self::$logic->setRequest(Controller::$request);
		self::$logic->setView(Controller::$view);
		self::$logic->execute(Controller::$request->getAction());
		self::$view->show();
	}
	
	static function getTemplateName(){
		$action = self::$request->getAction();
		$template_name = "work14-" . $action . ".php";
		return $template_name;
	}
	static function setLogic($logic){
		self::$logic = $logic;
	}
}

?>