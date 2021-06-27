<?php

class UserRepository extends DbRepository{
    function insert($login_id,$password,$nickname){
        $password = $this->hashPassword($password);
        $now = new DateTime();
        $sql = "INSERT INTO user(login_id,password,nickname,modified_at,created_at) VALUES(:login_id,:password,:nickname,:modified_at,:created_at)";
        $stmt = $this->execute($sql,[
            ':login_id' => $login_id,
            ':password' => $password,
            ':nickname' => $nickname,
            ':modified_at' => $now->format('Y-m-d H:i:s'), //?
            ':created_at' => $now->format('Y-m-d H:i:s'),
        ]);
    }
    
    
    function hashPassword($password){
        return sha1($password . 'SecretKey');
    }
    
    function fetchByUserLogin_id($login_id){
        $sql = "SELECT * FROM user WHERE login_id = :login_id";
        return $this->fetch($sql,[':login_id' => $login_id]);
    }
    
    function isUniqueUserLogin_id($login_id){
        $sql = "SELECT COUNT(id) as count FROM user WHERE login_id = :login_id";
        $row = $this->fetch($sql,[':login_id' => $login_id]);
        if($row['count'] === '0'){
            return true;
        }
        return false;
    }
    
    function isUniqueUserNickname($nickname){
        $sql = "SELECT COUNT(id) as count FROM user WHERE nickname = :nickname";
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
        $sql = "UPDATE user SET nickname = :nickname WHERE login_id = :login_id";
        $stmt = $this->execute($sql, $user);
    }
    
    function getAllUserId(){
        $sql = "SELECT id from user";
        return $this->fetchAll($sql);
    }
}