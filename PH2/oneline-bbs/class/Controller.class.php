<?php
require_once(CLASS_DIR . "Request.class.php");
require_once(CLASS_DIR . "View.class.php");
require_once(CLASS_DIR . "Logic.class.php");
require_once(CLASS_DIR . "Data.class.php");
require_once(CLASS_DIR . "ErrorData.class.php");
require_once(CLASS_DIR . "DB.class.php");
require_once(CLASS_DIR . "Validation.class.php");

//各ファイルに指示出しをするクラス
class Controller{
    //プロパティ（メンバ変数）の宣言
    public static $logic;
    public static $request;
    public static $view;
    
    static function execute(){
        //staticをつけたメンバ変数(11行目以降)のインスタンスを作成
        self::$logic = new Logic();
        self::$request = new Request();
        self::$logic->setRequest(Controller::$request);
        self::$view = new View();
        self::$logic->setView(Controller::$view);
        self::$logic->setData( new Data());
        self::$logic->setErrorData(new ErrorData());
        self::$logic->setDB(new DB());
        //ロジッククラスの実行
        self::$logic->execute(Controller::$request->getAction());
        //staticをつけたメンバ変数 $viewが持つメゾットshow()にアクセス
        self::$view->show();
    }
    
    //getTemplateName関数を定義
    static function getTemplateName(){
        $action = self::$request->getAction();
        $template_name = VIEW_DIR . $action . ".php";
        return $template_name;
    }
}