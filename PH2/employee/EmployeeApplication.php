<?php
class EmployeeApplication extends Application{
    protected $login_action = [];
    
    public function getRootDir(){
        return dirname(__FILE__);
    }
    
    //戻り値がRouterに入る
    protected function registerRoutes(){
        return [
            //連想配列の書き方？
            '/'=>['controller'=>'department', 'action'=>'index'],
            '/department/index'=>['controller'=>'department', 'action'=>'index'],
            '/department/edit'=>['controller'=>'department', 'action'=>'edit'],
            '/department/new'=>['controller'=>'department', 'action'=>'new'],
        ];
    }
    
    protected function configure(){
        $this->db_manager->connect('master', [
            'dsn' => 'mysql:dbname=employee;host=localhost;charset=utf8',
            'user' => 'root',
            'password' => '',
        ]);
    }
}