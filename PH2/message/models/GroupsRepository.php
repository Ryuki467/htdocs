<?php
class GroupsRepository extends DbRepository{    
    function getModel(){
        //社員の入力データモデル配列
        return [
            "id" => "",
            "group_id" => "",
            "message" => "",
        ];
    }
    
    function getGroups($id){
        $sql = "SELECT g.title,gu.group_id 
                FROM group_user gu 
                LEFT JOIN groups g 
                ON gu.group_id=g.group_id 
                WHERE gu.id=:id;";
        return $this->fetchAll($sql,['id' => $id]);
    }
    
    function getAllGroup_user(){
        $sql = "SELECT * FROM group_user";
        return $this->fetchAll($sql);
    }
    
    function getChat($group_id){
        $sql = "SELECT
                    u.nickname,c.message 
                FROM chat c 
                LEFT JOIN user u 
                ON c.id=u.id 
                WHERE c.group_id=:group_id";
        return $this->fetchAll($sql,['group_id' => $group_id]);
    }
    
    function getGroup_user(){
        $sql = "SELECT 
                    g.title,
                    COUNT(gu.id) menber,
                    g.group_id
                FROM 
                	group_user gu
                LEFT JOIN
                	groups g
                ON
                	gu.group_id=g.group_id
                group by group_id 
                order by group_id asc";
        return $this->fetchAll($sql);
    }
    
    function getMyGroups($group_id){
        $sql = "SELECT * FROM groups WHERE group_id = :group_id";
        return $this->fetch($sql,['group_id' => $group_id]);
    }
    
    function getNewGroups(){
        $sql = "SELECT * FROM groups ORDER BY group_id DESC";
        return $this->fetch($sql);
    }
    
    function insert($title){
        //to_user_id　の値を変え、自分以外で全て実行する
        $sql = "INSERT INTO groups(title,created_at) VALUES(:title,now())";
        $stmt = $this->execute($sql,$title);
    }
    
    function insertGroup_User($group_user){
        $sql = "INSERT INTO group_user(group_id,id) VALUES(:group_id,:id)";
        $stmt = $this->execute($sql,$group_user);
    }
    
    function insertChat($chat){
        //to_user_id　の値を変え、自分以外で全て実行する
        $sql = "INSERT INTO chat(group_id,id,message) VALUES(:group_id,:id,:message)";
        $stmt = $this->execute($sql,$chat);
    }
}