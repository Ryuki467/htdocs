<?php
class Logic{
    //プロパティ（メンバ変数）の宣言
    private $data;
    private $errorData;
    private $request;
    private $view;
    private $db;
    
    //execute($action)関数を定義
    function execute($action){
        
        //Controller.class.php内の$template_name = "work16-".$action.".php" に代入
        switch($action){
            case "form":
                $this->getPost();
                break;
            case "register":
                $this->getPostParameters();
                if(! Validation::isRequired($this->data->getName())){
                    $this->errorData->addError("name", "名前は必須です");
                }
                if(! Validation::isRequired($this->data->getComment())){
                    $this->errorData->addError("comment", "コメントは必須です");
                }
                if($this->errorData->hasError()){
                    $this->getPost();
                    $this->request->setAction("form");
                }else{
                    //DBへの登録
                    $this->registerPost();
                }
                break;
            default:
                $action = "error";
                //メンバ変数actionに"error"を代入
                $this->request->setAction("error");
                break;
        }
        //インスタンスview内のsetBaseTemplate($filename)関数にアクセス $base_template_filenameに work16-base-template.phpを代入
        $this->view->setBaseTemplate(VIEW_DIR . "base-template.php");
        //インスタンスview内のrender($data)関数にアクセス
        $this->view->render($this->data, $this->errorData);
    }
    
    private function getPostParameters(){
        //$this->dataのプロパティを取得し、キーを$varsに代入
        $vars = array_keys(get_object_vars($this->data));
        //インスタンスrequest内のgetParameter($key)関数にアクセスし、結果をインスタンスdataに代入 ? $this->data[$key]が存在している場合trueを返す
        foreach($vars as $var){
            $this->data->$var = $this->request->getParameter($var);
        }
    }
    
    private function getPost(){
        $sql = "SELECT id,name,comment FROM posts order by created_at DESC";
        $this->data->setPosts($this->db->query($sql));
    }
    
    private function registerPost(){
        $sql = "INSERT INTO posts(name, comment, created_at) VALUES(:name, :comment, NOW())";
        $params["name"] = $this->data->getName();
        $params["comment"] = $this->data->getComment();
        $this->db->execute($sql,$params);
    }
    
    function setData($data){
        $this->data = $data;
    }
    
    function setRequest($request){
        $this->request = $request;
    }
    
    function setView($view){
        $this->view = $view;
    }
    
    function setDB($db){
        $this->db = $db;
    }
    
    function setErrorData($errorData){
        $this->errorData = $errorData;
    }
}