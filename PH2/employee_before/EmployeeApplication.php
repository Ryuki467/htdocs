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
            '/'=>['controller'=>'employee', 'action'=>'index'],
            '/employee/index'=>['controller'=>'employee', 'action'=>'index'],
            '/employee/edit'=>['controller'=>'employee', 'action'=>'edit'],
            '/employee/new'=>['controller'=>'employee', 'action'=>'new'],
            '/employee/delete'=>['controller'=>'employee', 'action'=>'delete'],
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