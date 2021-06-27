<?php

class UserRepository extends DbRepository{
    function insert($user_name,$password,$mail){
        $password = $this->hashPassword($password);
        $now = new DateTime();
        $sql = "INSERT INTO user(user_name,password,name,mail,created_at) VALUES(:user_name,:password,'名無し',:mail,:created_at)";
        $stmt = $this->execute($sql,[
            ':user_name' => $user_name,
            ':password' => $password,
            ':mail' => $mail,
            ':created_at' => $now->format('Y-m-d H:i:s')
        ]);
    }
    
    function hashPassword($password){
        return sha1($password . 'SecretKey');
    }
    
    function fetchByUserName($user_name){
        $sql = "SELECT * FROM user WHERE user_name = :user_name";
        return $this->fetch($sql,[':user_name' => $user_name]);
    }
    
    function isUniqueUserName($user_name){
        $sql = "SELECT COUNT(id) as count FROM user WHERE user_name = :user_name";
        $row = $this->fetch($sql,[':user_name' => $user_name]);
        if($row['count'] === '0'){
            return true;
        }
        return false;
    }
    
    function update($user){
        $sql = "UPDATE user SET name = :name,mail = :mail WHERE id = :id";
        $stmt = $this->execute($sql, $user);
    }
    
    function fetchByUserId($id){
        $sql = "SELECT * FROM user WHERE id = :id";
        return $this->fetch($sql,[':id' => $id]);
    }
}