<?php

class MessageRepository extends DbRepository{
    function getModel(){
        //社員の入力データモデル配列
        return [
            "to_user_id" => "",
            "pass_sec" => "",
            "pass_tel" => "",
            "pass_name" => "",
            "msec" => "",
            "message" => "",
            "from_user_id" => "",
            "is_urgent" => "",
        ];
    }
    
    function getMessageByToUserId($to_user_id){
        $sql = "SELECT
                    m.message_id,m.to_user_id,m.pass_sec,m.pass_tel,
                    m.pass_name,m.msec,m.message,m.from_user_id,m.is_urgent
                FROM message as m
                WHERE m.to_user_id = :to_user_id";
        return $this->fetchAll($sql,["to_user_id" => $to_user_id]);
    }
    
    function getMessageByUserId($from_user_id){
        $sql = "SELECT
                    m.message_id,m.to_user_id,m.pass_sec,m.pass_tel,
                    m.pass_name,m.msec,m.message,m.from_user_id,u.name,m.is_urgent
                FROM message as m
                LEFT JOIN user as u
                ON m.to_user_id = u.id
                WHERE m.from_user_id = :from_user_id";
        return $this->fetchAll($sql,["from_user_id" => $from_user_id]);
    }
    
    function ToUser($id){
        $sql = "SELECT
                    name,mail
                FROM user
                WHERE id = :id";
        return $this->fetchAll($sql,["id" => $id]);
    }
    
    function delete($message_id){
        $sql = "DELETE FROM message WHERE message_id = :message_id";
        return $this->execute($sql,["message_id" => $message_id]);
    }
    
    function insert($message){
        //to_user_id　の値を変え、自分以外で全て実行する
        $sql = "INSERT INTO message(to_user_id,pass_sec,pass_tel,pass_name,msec,message,from_user_id,is_urgent) VALUES(:to_user_id,:pass_sec,:pass_tel,:pass_name,:msec,:message,:from_user_id,:is_urgent)";
        $stmt = $this->execute($sql,$message);
    }
    
    function deleteByMessageIdAndToUserId($message_id,$to_user_id){
        $sql = "DELETE FROM message WHERE message_id = :message_id AND to_user_id = :to_user_id";
        $data = ["message_id" => $message_id, "to_user_id" => $to_user_id];
        $this->execute($sql,$data);
    }
}