<?php

class StatusController extends Controller{
    protected $auth_actions = ['index','update'];
    protected $present_list = ["在席","外出","会議中","食事"];
    protected $urgent_flg = false;
    
    
    function indexAction(){
        $user = $this->session->get('user');
        $statuses = $this->db_manager->get('Status')->getAll();
        //メッセージをセッションから取得
        $message = $this->session->get("message");
        $messages = $this->db_manager->get("message")->getMessageByToUserId($user['id']);
        foreach($messages as $value){
            if($value["is_urgent"] == 1){
                $this->urgent_flg = true;
            }
        }
        $this->session->remove('message');
        return $this->render([
            'statuses' => $statuses,
            'user' => $user,
            'present_list' => $this->present_list,
            'message' => $message,
            'urgent_flg' => $this->urgent_flg,
        ]);
    }
    
    function updateAction(){
        $message = "";
        $errors = [];
        $user = $this->session->get('user');
        $status = $this->db_manager->get('status')->getStatus($user['id']);
        
        if($this->request->isPost()){
            $model = $this->db_manager->get("status")->getModel();
            $keys = array_keys($model);
            foreach($keys as $key){
                $status[$key] = $this->request->getPost($key);
            }
            if(isset($status['user_id'])){
                $this->db_manager->get('status')->update($status);
                $message = "更新しました";
            }else{
                $status["user_id"] = $user["id"];
                $this->db_manager->get('status')->insert($status);
                $message = "追加しました";
            }
        }
        return $this->render([
            'user' => $user,
            'status' => $status,
            'message' => $message,
            'errors' => $errors,
            'present_list' => $this->present_list,
        ]);
    }
}