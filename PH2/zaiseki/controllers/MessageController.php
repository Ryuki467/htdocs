<?php

class MessageController extends Controller{
    protected $auth_actions = ['index','add','send'];
    protected $msec_list = ["電話","伝言","折り返し","来訪"];
    protected $is_urgent = ["普通","緊急"];
    
    public function indexAction(){
        $user = $this->session->get('user');
        $messages = $this->db_manager->get('message')->getMessageByToUserId($user['id']);
        if($this->request->isPost()){
            $delete_flg = false;
            $delete = $this->request->getPost("delete");
            foreach($delete as $message_id => $d){
                if($d[0] == 1){
                    $this->db_manager->get('message')->deleteByMessageIdAndToUserId($message_id,$user['id']);
                    $delete_flg = true;
                }
            }
            if($delete_flg){
                $this->session->set("message","伝言メモを削除しました");
            }else{
                $this->session->set("message","伝言メモを残しています");
            }
            return $this->redirect('/');
        }
        return $this->render([
            'messages' => $messages,
            'user' => $user,
            'msec_list' => $this->msec_list,
            'is_urgent' => $this->is_urgent,
        ]);
    }
    
    public function sendAction(){
        $user = $this->session->get('user');
        $messages = $this->db_manager->get('message')->getMessageByUserId($user['id']);
        if($this->request->isPost()){
            $delete_flg = false;
            $delete = $this->request->getPost("delete");
            foreach($delete as $message_id => $d){
                if($d[0] == 1){
                    $this->db_manager->get('message')->deleteByMessageIdAndToUserId($message_id,$user['id']);
                    $delete_flg = true;
                }
            }
            if($delete_flg){
                $this->session->set("message","伝言メモを削除しました");
            }else{
                $this->session->set("message","伝言メモを残しています");
            }
            return $this->redirect('/');
        }
        return $this->render([
            'messages' => $messages,
            'user' => $user,
            'msec_list' => $this->msec_list,
        ]);
    }
    
    function addAction(){
        $user = $this->session->get('user'); //自分の情報 id,user_name,password,name,create_atをuserテーブルから取得
        $message = $this->db_manager->get('message')->getModel(); //SQLの宣言
        if($this->request->isPost()){
            if(isset($message["to_user_id"])){
                $keys = array_keys($message);
                foreach($keys as $key){
                    $message[$key] = $this->request->getPost($key);//各キーに値を代入
                }
                if(! $this->db_manager->get("user")->fetchByUserId($message["to_user_id"])){
                    $this->session->set("message", "宛先ユーザが存在しません");
                    return $this->redirect('/');
                }
                $message["from_user_id"] = $user["id"]; //自分のIDを取得 
                $this->db_manager->get("message")->insert($message);//SQLに上書き
                $this->session->set("message","伝言メモを登録しました");
                $to_user = $this->db_manager->get('message')->ToUser($message["to_user_id"]);
                if($message["is_urgent"]== "緊急"){
                    $this->sendmail($message,$to_user,$this->msec_list);
                }
                return $this->redirect('/');
            }else{
                for($i=1; $i<4; $i++){
                    if($i == $user["id"]){
                        continue;
                    }else{
                        $keys = array_keys($message);
                        foreach($keys as $key){
                            $message[$key] = $this->request->getPost($key);//各キーに値を代入 
                        }
                        $message["to_user_id"] = $i;
                        $message["from_user_id"] = $user["id"]; //自分のIDを取得
                        $this->db_manager->get("message")->insert($message);//SQLに上書き
                    }
                }
                $this->session->set("message","伝言メモを登録しました");
                return $this->redirect('/');
            }
        }else{
            $to_user_id = $this->request->getGet("to_user_id"); //送り先相手のIDを取得する
            $to_user = $this->db_manager->get("user")->fetchByUserId($to_user_id);//userテーブルから送り先相手のID,user_name,password,name,create_atを引っ張ってくる
            $message["to_user_id"] = $to_user_id;
            if(isset($to_user["name"])){
                $message["to_user_name"] = $to_user["name"]; //$messageに追記
            }
        }
        return $this->render(['message' => $message, 'msec_list' => $this->msec_list]);
    }
    
    function sendmail($message,$to_user,$msec_list){
        mb_language("Japanese");
        mb_internal_encoding("UTF-8");
        $email = "media-team@no1s.biz";
        //宛先
        $to = $to_user[0]["mail"];
        //件名
        $subject = "【緊急伝言メモ】　在席管理アプリ";
        //本文
        $text = "━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
        $text .= "緊急伝言メモのお知らせ\n";
        $text .= "━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
        $text .= "救急対応が必要な伝言メモが登録されました\n";
        $text .= "━━━━━━━━━━━━━━━━━━━━━━━━━━\n\n";
        $text .= "・伝言メモ\n";
        $text .= "送信者名：" . $to_user[0]["name"] . "\n";
        $text .= "相手先部門：" . $message["pass_sec"] . "\n";
        $text .= "相手先電話：" . $message["pass_tel"] . "\n";
        $text .= "相手先名前：" . $message["pass_name"] . "\n";
        $text .= "伝言区分：" . $msec_list[$message["msec"]] . "\n";
        $text .= "伝言：" . $message["message"] . "\n";
        $text .= "━━━━━━━━━━━━━━━━━━━━━━━━━━\n\n";
        $text .= "・お知らせ\n\n";
        $text .= "ご不明な点がございましたら気軽にご連絡下さい。\n";
        $text .= "また、今後ともよろしくお願い申し上げます。\n\n";
        $text .= "お問い合わせ先\n";
        $text .= "http://localhost:8080/Zaiseki/";
        //メール送信
        mb_send_mail($to,$subject,$text);
    }
    
}