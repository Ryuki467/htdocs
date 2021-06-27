<?php

class UserRepository extends DbRepository{
    function insert($mail,$password,$nickname){
        $password = $this->hashPassword($password);
        $now = new DateTime();
        $sql = "INSERT INTO user(mail,password,nickname,modified_at,created_at) VALUES(:mail,:password,:nickname,:modified_at,:created_at)";
        $stmt = $this->execute($sql,[
            ':mail' => $mail,
            ':password' => $password,
            ':nickname' => $nickname,
            ':modified_at' => $now->format('Y-m-d H:i:s'), //?
            ':created_at' => $now->format('Y-m-d H:i:s'),
        ]);
    }
    
    
    function hashPassword($password){
        return sha1($password . 'SecretKey');
    }
    
    function fetchByUserMail($mail){
        $sql = "SELECT * FROM user WHERE mail = :mail";
        return $this->fetch($sql,[':mail' => $mail]);
    }
    
    function isUniqueUserMail($mail){
        $sql = "SELECT COUNT(user_id) as count FROM user WHERE mail = :mail";
        $row = $this->fetch($sql,[':mail' => $mail]);
        if($row['count'] === '0'){
            return true;
        }
        return false;
    }
    
    function isUniqueUserNickname($nickname){
        $sql = "SELECT COUNT(user_id) as count FROM user WHERE nickname = :nickname";
        $row = $this->fetch($sql,[':nickname' => $nickname]);
        if($row['count'] === '0'){
            return true;
        }
        return false;
    }
    
    function getAllUserInfo(){
        $sql = "SELECT * from user";
        return $this->fetchAll($sql);
    }
    
    function update($user){
        $sql = "UPDATE user SET nickname = :nickname WHERE mail = :mail";
        $stmt = $this->execute($sql, $user);
    }
    
    function getAllUserId(){
        $sql = "SELECT user_id from user";
        return $this->fetchAll($sql);
    }
}