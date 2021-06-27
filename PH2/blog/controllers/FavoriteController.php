<?php

class FavoriteController extends Controller{
    function indexAction(){
        $user_id = $this->request->getGet("user_id");
        $user = $this->session->get('user'); //自分のユーザ情報を取得
        $tweetes = $this->db_manager->get('tweet')->getTweetInfo();
        $favorite = $this->db_manager->get('favorite')->getFavoriteInfo();
        return $this->render([
            'user' => $user,
            'user_id' => $user_id,
            'tweetes' => $tweetes,
            'favorite' => $favorite,
        ]);
    }
    
    function insertAction(){
        $tweet = [];
        $user = $this->session->get('user');
        $tweet["user_id"] = $user["user_id"];
        $tweet["tweet_id"] = $this->request->getGet("tweet_id");
        $rowCount = $this->db_manager->get("favorite")->insert($tweet);
        $this->session->set("message",$rowCount);
        return $this->redirect('/');
    }
    
    function deleteAction(){
        $param = ["tweet_id" => $this->request->getGet("tweet_id")];
        $rowCount = $this->db_manager->get("favorite")->deletefavoriteByID($param);
        $this->session->set("message",$rowCount);
        return $this->redirect('/favorite/index');
    }
}