<?php
class BlogApplication extends Application{
    //認証されていない場合に遷移するコントローラ名とアクションの配列指定
    protected $login_action = ['user','login'];
    
    public function getRootDir(){
        return dirname(__FILE__);
    }
    
    //戻り値がRouterに入る
    protected function registerRoutes(){
        return [
            //連想配列の書き方？
            '/'=>['controller'=>'tweet', 'action'=>'index'],
            '/user'=>['controller'=>'user', 'action'=>'index'],
            '/user/:action'=>['controller'=>'user'],
            '/tweet/index'=>['controller'=>'tweet','action'=>'index'],
            '/tweet/:action'=>['controller'=>'tweet'],
            '/tweet/delete'=>['controller'=>'tweet', 'action'=>'delete'],
            '/follow/index'=>['controller'=>'follow','action'=>'index'],
            '/follow/insert'=>['controller'=>'follow', 'action'=>'insert'],
            '/favorite/index'=>['controller'=>'favorite','action'=>'index'],
            '/favorite/insert'=>['controller'=>'favorite', 'action'=>'insert'],
            '/favorite/delete'=>['controller'=>'favorite', 'action'=>'delete'],
        ];
    }
    
    protected function configure(){
        $this->db_manager->connect('master', [
            'dsn' => 'mysql:dbname=blog;host=localhost;charset=utf8',
            'user' => 'root',
            'password' => '',
        ]);
    }
}