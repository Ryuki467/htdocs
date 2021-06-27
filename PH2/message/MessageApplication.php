<?php
class MessageApplication extends Application{
    //認証されていない場合に遷移するコントローラ名とアクションの配列指定
    protected $login_action = ['user','login'];
    
    public function getRootDir(){
        return dirname(__FILE__);
    }
    
    //戻り値がRouterに入る
    protected function registerRoutes(){
        return [
            //連想配列の書き方？
            '/'=>['controller'=>'groups', 'action'=>'index'],
            '/user'=>['controller'=>'user', 'action'=>'index'],
            '/user/:action'=>['controller'=>'user'],
            '/groups/index'=>['controller'=>'groups','action'=>'index'],
            '/groups/:action'=>['controller'=>'groups'],
            '/groups/insert'=>['controller'=>'groups', 'action'=>'insert'],
        ];
    }
    
    protected function configure(){
        $this->db_manager->connect('master', [
            'dsn' => 'mysql:dbname=message;host=localhost;charset=utf8',
            'user' => 'root',
            'password' => '',
        ]);
    }
}