<?php

class UserController extends Controller{
    protected $auth_actions = ['index','logout'];
    public static $register_flg;
    
    public function registerAction(){
        if($this->session->isAuthenticated()){
            return $this->redirect('/');
        }
        $user_name = "";
        $password = "";
        $mail = "";
        $errors = [];
        if($this->request->isPost()){
            $token = $this->request->getPost('_token');
            if(! $this->checkCsrfToken('user/register',$token )){
                return $this->redirect('/user/register');
            }
            $user_name = $this->request->getPost('user_name');
            $password = $this->request->getPost('password');
            $mail = $this->request->getPost('mail');
            if(! strlen($user_name)){
                $errors[] = 'ユーザIDを入力してください';
            }else if(! preg_match('/^\w{3,20}$/',$user_name)){
                $errors[] = 'ユーザIDは半角英数字およびアンダースコアを3～20文字以内で入力してください';
            }else if(! $this->db_manager->get('User')->isUniqueUserName($user_name)){
                $errors[] = 'ユーザIDは既に使用されています';
            }
            
            if(! strlen($password)){
                $errors[] = 'パスワードを入力してください';
            }else if(4 > strlen($password) || strlen($password) > 30){
                $errors[] = 'パスワードは4～30文字以内で入力してください';
            }
            $reg_str = "/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/";
            if(! strlen($mail)){
                $errors[] = 'メールアドレスを入力してください';
            }else if(! preg_match($reg_str,$mail)){
                $errors[] = '正しくないメールアドレスです';
            }
            if(count($errors) ===0){
                $this->db_manager->get('User')->insert($user_name,$password,$mail);
                $this->session->setAuthenticated(true);
                $user = $this->db_manager->get('User')->fetchByUserName($user_name);
                $this->session->set('user',$user);
                $status["present"] = 0;
                $status["destination"] = "";
                $status["reach_time"] = "";
                $status["memo"] = "";
                $status["user_id"] = $user["id"];
                $this->db_manager->get('status')->insert($status);
                $this->sendmail($user_name,$password,$mail);
                return $this->redirect('/');
            }
        }
        return $this->render([
            'user_name' => $user_name,
            'password' => $password,
            'mail' => $mail,
            'errors' => $errors,
            '_token' => $this->generateCsrfToken('user/register')
        ],'register' );
    }
    
    function indexAction(){
        $message = "";
        $user = $this->session->get('user');
        if($this->request->isPost()){
            $data["id"] = $user["id"];
            $data["name"] = $this->request->getPost("name");
            $data["mail"] = $this->request->getPost("mail");
            if(empty($data["mail"])){
                $message = "メールアドレスを入力してください";
            }else{
                $this->db_manager->get('User')->update($data);
                $user = $this->db_manager->get('User')->fetchByUserName($user["user_name"]);
                $this->session->set('user',$user);
                $message = "更新しました";
            }
        }
        return $this->render(['user' => $user,'message' => $message]);
    }
    
    function loginAction(){
        //認証済みならHOME画面へ遷移
        if($this->session->isAuthenticated()){
            return $this->redirect('/');
        }
        $user_name = "";
        $password = "";
        $errors = [];
        
        if($this->request->isPost()){
            $token = $this->request->getPost('_token');
            if(! $this->checkCsrfToken ('user/login',$token)){
                return $this->redirect('/user/login');
            }
            $user_name = $this->request->getPost('user_name');
            $password = $this->request->getPost('password');
            if(! strlen($user_name)){
                $errors[] = 'ユーザIDを入力してください';
            }
            if(! strlen($password)){
                $errors[] = 'パスワードを入力してください';
            }
            if(count($errors) ===0){
                $user_repository = $this->db_manager->get('User');
                $user = $user_repository->fetchByUserName($user_name);
                if(! $user || ($user['password'] !== $user_repository->hashPassword($password))){
                    $errors[] = 'ユーザIDかパスワードが不正です';
                }else{
                    //認証OKなのでホーム画面へ遷移
                    $this->session->setAuthenticated(true);
                    $this->session->set('user',$user);
                    return $this->redirect('/');
                }
            }
        }
        return $this->render([
            'user_name' => $user_name,
            'password' => $password,
            'errors' => $errors,
            '_token' => $this->generateCsrfToken('user/login'),
        ]);
    }
    
    function logoutAction(){
        $this->session->clear();
        $this->session->setAuthenticated(false);
        return $this->redirect('/user/login');
    }
    
    function sendmail($name,$password,$mail_address){
        mb_language("Japanese");
        mb_internal_encoding("UTF-8");
        $email = "media-team@no1s.biz";
        //宛先
        $to = $mail_address;
        //件名
        $subject = "【新規登録完了】在席管理アプリ";
        //本文
        $text = "━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
        $text .= "新規ユーザ登録完了のお知らせ\n";
        $text .= "━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
        $text .= "この度は、「在席管理アプリ」をご利用ありがとうございます。\n";
        $text .= "このメールは、ユーザ登録が完了したことをご確認頂くためお送りしているものです。\n";
        $text .= "━━━━━━━━━━━━━━━━━━━━━━━━━━\n\n";
        $text .= "・ユーザ情報\n\n";
        $text .= "ユーザ名：" . $name . "\n";
        $text .= "パスワード：" . $password . "\n";
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