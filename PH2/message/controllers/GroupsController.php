<?php

class GroupsController extends Controller{
    protected $auth_actions = ['index','update','new','timeline'];
    
    /*
     * $tweetesに自分のつぶやきとフォローしている人のつぶやきのみを出力したい
     * $follow["user_id"] 
     */
    
    function indexAction(){
        $user = $this->session->get('user');
        $groups = $this->db_manager->get('groups')->getGroups($user["id"]);
        return $this->render([
            'user' => $user,
            'groups' => $groups,
        ]);
    }
    
    function updateAction(){
        $user = $this->session->get('user'); //全てのユーザ情報を取得
        $group_user = $this->db_manager->get('groups')->getGroup_user();
        $group_users = $this->db_manager->get('groups')->getAllGroup_user();
        return $this->render([
            'user' => $user,
            'group_user' => $group_user,
            'group_users' => $group_users,
        ]);
    }
    
    function newAction(){
        $user = $this->session->get('user'); //自分の情報 id,user_name,password,name,create_atをuserテーブルから取得
        if($this->request->isPost()){
            $title = ["title" => $this->request->getPost("title")];
            if(empty($title)){
                $message = 'グループ名を入力してください';
                return $this->render(['user' => $user,'message' => $message]);
            }
            $this->db_manager->get("groups")->insert($title);
            $groups = $this->db_manager->get('groups')->getNewGroups();
            $group_user = [
                "group_id" => $groups["group_id"],
                "id" => $user["id"],
            ];
            $this->db_manager->get("groups")->insertGroup_User($group_user);
            return $this->redirect('/groups/update');
        }
        return $this->render([
            'user' => $user,
        ]);
    }
    
    function timelineAction(){
        $user = $this->session->get('user'); //自分の情報 id,user_name,password,name,create_atをuserテーブルから取得
        $group_id = $this->request->getGet("group_id");
        $groups = $this->db_manager->get('groups')->getMyGroups($group_id);
        $chates = $this->db_manager->get('groups')->getChat($group_id);
        if($this->request->isPost()){
            $chat = $this->db_manager->get('groups')->getModel();
            $chat["group_id"] = $groups["group_id"];
            $chat["id"] = $user["id"];
            $chat["message"] = $this->request->getPost("message");
            if(empty($chat["message"])){
                $message = 'チャットを入力してください';
                return $this->render(['user' => $user,'groups' => $groups,'chates' => $chates,'message' => $message]);
            }
            $this->db_manager->get("groups")->insertChat($chat);
            return $this->render([
                'user' => $user,
                'groups' => $groups,
                'chates' => $chates,
            ]);
        }
        return $this->render([
            'user' => $user,
            'groups' => $groups,
            'chates' => $chates,
        ]);
    }
    
    function insertAction(){
        $user = $this->session->get('user');
        $group_id = $this->request->getGet("group_id");
        $group_user = [
            "group_id" => $group_id,
            "id" => $user["id"],
        ];
        $this->db_manager->get("groups")->insertGroup_User($group_user);
        return $this->redirect('/');
    }
}