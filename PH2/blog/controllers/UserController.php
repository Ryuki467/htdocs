<?php

class UserController extends Controller{
    protected $auth_actions = ['index','logout'];
    public static $register_flg;
    
    public function registerAction(){
        if($this->session->isAuthenticated()){
            return $this->redirect('/');
        }
        $mail = "";
        $password = "";
        $password2 = "";
        $nickname = "";
        $errors = [];
        self::$register_flg = true;
        if($this->request->isPost()){ //登録ボタンを押した際
            $token = $this->request->getPost('_token');
            if(! $this->checkCsrfToken('user/register',$token )){
                return $this->redirect('/user/register');
            }
            $mail = $this->request->getPost('mail');
            $password = $this->request->getPost('password');
            $password2 = $this->request->getPost('password2');
            
            $nickname = $this->request->getPost('nickname');
            $reg_str = "/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/";
            
            if(! strlen($mail)){
                $errors[] = 'メールアドレスを入力してください';
            }else if(! preg_match($reg_str,$mail)){
                $errors[] = '正しくないメールアドレスです';
            }else if(! $this->db_manager->get('User')->isUniqueUserMail($mail)){
                $errors[] = 'メールアドレスは既に使用されています';
            }
            
            if(! strlen($password)){
                $errors[] = 'パスワードを入力してください';
            }else if(! strlen($password2)){
                $errors[] = 'パスワードを入力してください';
            }else if(4 > strlen($password) || strlen($password) > 30){
                $errors[] = 'パスワードは4～30文字以内で入力してください';
            }else if(4 > strlen($password2) || strlen($password2) > 30){
                $errors[] = 'パスワードは4～30文字以内で入力してください';
            }else if($password !== $password2){
                $errors[] = 'パスワードが異なっています';
            }
            
            if(! strlen($nickname)){
                $errors[] = 'ニックネームを入力してください';
            }else if(! $this->db_manager->get('User')->isUniqueUserNickname($nickname)){
                $errors[] = 'ニックネームが被っています。';
            }
            if(count($errors) ===0){
                $this->db_manager->get('User')->insert($mail,$password,$nickname);
                $this->session->setAuthenticated(true);
                $user = $this->db_manager->get('User')->fetchByUserMail($mail);
                
                $this->session->set('user',$user);
                $this->sendmail($mail,$password,$nickname);
                return $this->redirect('/');
            }
        }
        return $this->render([
            'mail' => $mail,
            'password' => $password,
            'nickname' => $nickname,
            'errors' => $errors,
            '_token' => $this->generateCsrfToken('user/register'),
        ],'register' );
    }
    
    function indexAction(){
        $message = "";
        $user = $this->session->get('user');
        if($this->request->isPost()){
            $data["mail"] = $user["mail"];
            $data["nickname"] = $this->request->getPost("nickname");
            if(! $this->db_manager->get('User')->isUniqueUserNickname($data["nickname"])){
                $message = 'ニックネームが被っています。';
                return $this->render(['user' => $user,'message' => $message]);
            }
            $this->db_manager->get('User')->update($data);
            $user = $this->db_manager->get('User')->fetchByUserMail($user["mail"]);
            $this->session->set('user',$user);
            $message = "更新しました";
        }
        return $this->render(['user' => $user,'message' => $message]);
    }
    
    function loginAction(){
        //認証済みならHOME画面へ遷移
        if($this->session->isAuthenticated()){
            return $this->redirect('/');
        }
        $mail = "";
        $password = "";
        $errors = [];
        self::$register_flg = false;
        if($this->request->isPost()){
            $token = $this->request->getPost('_token');
            if(! $this->checkCsrfToken ('user/login',$token)){
                return $this->redirect('/user/login');
            }
            $mail = $this->request->getPost('mail');
            $password = $this->request->getPost('password');
            if(! strlen($mail)){
                $errors[] = 'メールアドレスを入力してください';
            }
            if(! strlen($password)){
                $errors[] = 'パスワードを入力してください';
            }
            if(count($errors) ===0){
                $user_repository = $this->db_manager->get('User');
                $user = $user_repository->fetchByUserMail($mail);
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
            'mail' => $mail,
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
    
    function sendmail($mail,$password,$nickname){
        mb_language("Japanese");
        mb_internal_encoding("UTF-8");
        $email = "media-team@no1s.biz";
        //宛先
        $to = $mail;
        //件名
        $subject = "【新規登録完了】マイクロブログ";
        //本文
        $text = "━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
        $text .= "新規ユーザ登録完了のお知らせ\n";
        $text .= "━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
        $text .= "この度は、「マイクロブログ」をご利用ありがとうございます。\n";
        $text .= "このメールは、ユーザ登録が完了したことをご確認頂くためお送りしているものです。\n";
        $text .= "━━━━━━━━━━━━━━━━━━━━━━━━━━\n\n";
        $text .= "・ユーザ情報\n\n";
        $text .= "ユーザ名：" . $nickname . "\n";
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