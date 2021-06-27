<?php
class ZaisekiApplication extends Application{
    //認証されていない場合に遷移するコントローラ名とアクションの配列指定
    protected $login_action = ['user','login'];
    
    public function getRootDir(){
        return dirname(__FILE__);
    }
    
    //戻り値がRouterに入る
    protected function registerRoutes(){
        return [
            //連想配列の書き方？
            '/'=>['controller'=>'status', 'action'=>'index'],
            '/status/update'=>['controller'=>'status', 'action'=>'update'],
            '/user'=>['controller'=>'user', 'action'=>'index'],
            '/user/:action'=>['controller'=>'user'],
            '/message'=>['controller'=>'message', 'action'=>'index'],
            '/message/:action'=>['controller'=>'message'],
        ];
    }
    
    protected function configure(){
        $this->db_manager->connect('master', [
            'dsn' => 'mysql:dbname=zaiseki;host=localhost;charset=utf8',
            'user' => 'root',
            'password' => '',
        ]);
    }
}