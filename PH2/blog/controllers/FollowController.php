<?php

class FollowController extends Controller{
    function indexAction(){
        $user = $this->session->get('user');
        $followes = $this->db_manager->get('follow')->isFollowerName();
        $follow = $this->db_manager->get('follow')->getMyFollow($user["user_id"]);
        return $this->render([
            'followes' => $followes,
            'follow' => $follow,
            'user' => $user,
        ]);
    }
    
    function insertAction(){
        $follow = [];
        $user = $this->session->get('user');
        $follow["user_id"] = $user["user_id"];
        $follow["following_user_id"] = $this->request->getGet("following_user_id");
        $rowCount = $this->db_manager->get("follow")->insert($follow);
        $this->session->set("message",$rowCount);
        return $this->redirect('/follow/index');
    }
    
    function deleteAction(){ //?
        $param = ["ID" => $this->request->getGet("ID")];
        $rowCount = $this->db_manager->get("Employee")->deleteEmployeeByID($param);
        $this->session->set("message",$rowCount . "件を削除しました");
        return $this->redirect('/employee/index');
    }
}