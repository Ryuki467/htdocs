<?php

class FavoriteRepository extends DbRepository{
    function getFavoriteInfo(){
        $sql = "select * from favorite";
        return $this->fetchAll($sql);
    }
    
    function insert($tweet){
        //to_user_id　の値を変え、自分以外で全て実行する
        $sql = "INSERT INTO favorite(user_id,tweet_id,modified_at) VALUES(:user_id,:tweet_id,now())";
        $stmt = $this->execute($sql, $tweet);
    }
    
    function deleteFavoriteByID($param){
        $sql = "DELETE FROM favorite WHERE tweet_id = :tweet_id";
        $stmt = $this->execute($sql, $param);
    }
}