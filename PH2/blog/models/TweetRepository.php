<?php
class TweetRepository extends DbRepository{
    function getModel(){
        //社員の入力データモデル配列
        return [
            "user_id" => "",
            "body" => "",
        ];
    }
    
    function getTweetInfo(){
        $sql = "SELECT
                    t.tweet_id,u.user_id,u.nickname,t.body,t.created_at 
                FROM 
                    tweet as t 
                LEFT JOIN
                    user as u
                ON t.user_id = u.user_id 
                ORDER BY tweet_id DESC";
        return $this->fetchAll($sql);
    }
    
    function insert($tweet){
        //to_user_id　の値を変え、自分以外で全て実行する
        $sql = "INSERT INTO tweet(user_id,body,created_at) VALUES(:user_id,:body,now())";
        $stmt = $this->execute($sql,$tweet);
    }
    
    function deletetweetByID($param){
        $sql = "DELETE FROM tweet WHERE tweet_id = :tweet_id";
        $stmt = $this->execute($sql, $param);
    }
}