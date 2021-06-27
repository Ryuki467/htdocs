<?php

class FollowRepository extends DbRepository{
    /*
     * このテーブルは自動のfollow_id,ユーザのID(user_id),フォローしているユーザID(following_user_id)でできている。
     * フォロー（自分がフォローしている数)を表示するには、user_idが自分のidになっている場合を検索
     * フォロワー（自分をフォローしてくれている数)を表示するには、following_user_idが自分のidになっている場合を検索
     * user_idごとに呼び出したい
     */
    
    function isFollowerName(){
        $sql = "SELECT 
                    u.nickname,
                    COUNT(f.user_id) as follow,
                    case
            			when t1.follower <> 'null' then follower
            			else 0
		            end as follower,
                    u.user_id
                FROM 
                	(
                		user as u 
                	LEFT JOIN 
                		follow as f
                		
                	ON 
                		u.user_id=f.user_id
                	)
                LEFT JOIN
                	(
                	SELECT 
                		COUNT(following_user_id) as follower,following_user_id
                	FROM 
                		follow
                	group by following_user_id
                	) as t1
                ON
                	u.user_id=t1.following_user_id
                group by nickname 
                order by user_id asc;";
        return $this->fetchAll($sql);
    }
    
    function getFollowInfo(){
        $sql = "select * from follow";
        return $this->fetchAll($sql);
    }
    
    function getMyFollow($user_id){
        $sql = "select following_user_id from follow WHERE user_id = :user_id";
        return $this->fetchAll($sql,[':user_id' => $user_id]);
    }
    
    function insert($follow){
        //to_user_id　の値を変え、自分以外で全て実行する
        $sql = "INSERT INTO follow(user_id,following_user_id) VALUES(:user_id,:following_user_id)";
        $stmt = $this->execute($sql,$follow);
    }
    
    function deleteEmployeeByID($param){
        $sql = "DELETE FROM employee WHERE ID = :ID";
        $stmt = $this->execute($sql, $param);
        return $stmt->rowCount();
    }
}