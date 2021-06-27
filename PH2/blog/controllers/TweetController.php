<?php

class TweetController extends Controller{
    protected $auth_actions = ['index','single_index','single_tweet'];
    
    /*
     * $tweetesに自分のつぶやきとフォローしている人のつぶやきのみを出力したい
     * $follow["user_id"] 
     */
    
    function indexAction(){
        $user = $this->session->get('user');
        $follow = $this->db_manager->get('follow')->getFollowInfo();
        $favorite = $this->db_manager->get('favorite')->getFavoriteInfo();
        $following[] = $user["user_id"];
        for($i=0; $i<count($follow); $i++){
            if($follow[$i]["user_id"] === $user["user_id"]){
                $following[] = $follow[$i]["following_user_id"];
            }
        }
        $tweetes = $this->db_manager->get('tweet')->getTweetInfo();//全員のつぶやき
        if($this->request->isPost()){
            $tweet = $this->db_manager->get('tweet')->getModel(); //各キーの宣言
            $tweet["user_id"] = $user["user_id"];
            $tweet["body"] = $this->request->getPost("body");//bodyキーにつぶやきを代入
            if($tweet["body"] === ""){
                return $this->redirect('/');
            }
            $this->db_manager->get("tweet")->insert($tweet);//SQLに上書き
            $tweetes = $this->db_manager->get('tweet')->getTweetInfo();
            return $this->render([
                'user' => $user,
                'tweetes' => $tweetes,
                'tweet' => $tweet,
                'following' => $following,
                'favorite' => $favorite,
            ]);
        }
        return $this->render([
            'user' => $user,
            'tweetes' => $tweetes,
            'following' => $following,
            'favorite' => $favorite,
        ]);
    }
    
    function single_indexAction(){
        $user_id = $this->request->getGet("user_id");
        $user = $this->db_manager->get('user')->getAllUserInfo(); //全てのユーザ情報を取得
        $tweetes = $this->db_manager->get('tweet')->getTweetInfo();
        $favorite = $this->db_manager->get('favorite')->getFavoriteInfo();
        return $this->render([
            'user' => $user,
            'user_id' => $user_id,
            'tweetes' => $tweetes,
            'favorite' => $favorite,
        ]);
    }
    
    function single_tweetAction(){
        $tweet_id = $this->request->getGet("tweet_id");
        $user = $this->session->get('user'); //自分の情報 id,user_name,password,name,create_atをuserテーブルから取得
        $tweet = $this->db_manager->get('tweet')->getTweetInfo();
        return $this->render([
            'user' => $user,
            'tweet' => $tweet,
            'tweet_id' => $tweet_id,
        ]);
    }
    
    function deleteAction(){
        $user = $this->session->get('user');
        $favorite = $this->db_manager->get('favorite')->getFavoriteInfo();
        $param = ["tweet_id" => $this->request->getGet("tweet_id")];
        for($i=0; $i<count($favorite); $i++){
            if($param["tweet_id"] == $favorite[$i]["tweet_id"] && $user["user_id"] == $favorite[$i]["user_id"]){
                $rowCount = $this->db_manager->get("favorite")->deletefavoriteByID($param);
            }
        }
        $rowCount = $this->db_manager->get("tweet")->deletetweetByID($param);
        $this->session->set("message",$rowCount);
        return $this->redirect('/');
    }
    
}