<?php

/**
 * Application.
 *
 * @author Katsuhiro Ogawa <fivestar@nequal.jp>
 */
abstract class Application
{
    //true or falseのメンバ変数
    protected $debug = false;
    protected $request;
    protected $response;
    protected $session;
    protected $db_manager;

    /**
     * コンストラクタ
     *
     * @param boolean $debug
     */
    //引数$debugはデフォルトとしてfalseが与えられている
    public function __construct($debug = false)
    {
        //引数$debugがtrueなら、falseなら
        $this->setDebugMode($debug);
        $this->initialize();
        $this->configure();
    }

    /**
     * デバッグモードを設定
     * 
     * @param boolean $debug
     */
    protected function setDebugMode($debug)
    {
        if ($debug) {
            $this->debug = true;
            //ini_set 設定オプションの値を設定する　
            //display_errorsに1を代入？
            ini_set('display_errors', 1);
            //error_reporting 出力するPHPのエラーの種類を設定する
            //error_reporting(-1); 全ての PHP エラーを表示する
            error_reporting(-1);
        } else {
            $this->debug = false;
            //display_errorsに0を代入？
            ini_set('display_errors', 0);
        }
    }

    /**
     * アプリケーションの初期化
     */
    //各オブジェクトを作成
    protected function initialize()
    {
        $this->request    = new Request();
        $this->response   = new Response();
        $this->session    = new Session();
        $this->db_manager = new DbManager();
        //Routerのオブジェクトを作成し、$this->registerRoutes()関数の戻り値を入れる
        $this->router     = new Router($this->registerRoutes());
    }

    /**
     * アプリケーションの設定
     */
    protected function configure()
    {
    }

    /**
     * プロジェクトのルートディレクトリを取得
     *
     * @return string ルートディレクトリへのファイルシステム上の絶対パス
     */
    abstract public function getRootDir();

    /**
     * ルーティングを取得
     *
     * @return array
     */
    //抽象メゾット　抽象メソッドとは実装を持たない、シグネチャ(メソッド名、引数の型、引数の数)と戻り値の型のみを定義するメソッドです　？
    abstract protected function registerRoutes();

    /**
     * デバッグモードか判定
     *
     * @return boolean
     */
    //true or false　を返す
    public function isDebugMode()
    {
        return $this->debug;
    }

    /**
     * Requestオブジェクトを取得
     *
     * @return Request
     */
    //initialize()で作成したRequestオブジェクトを返す
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Responseオブジェクトを取得
     *
     * @return Response
     */
    //initialize()で作成したResponseオブジェクトを返す
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Sessionオブジェクトを取得
     *
     * @return Session
     */
    //initialize()で作成したSessionオブジェクトを返す
    public function getSession()
    {
        return $this->session;
    }

    /**
     * DbManagerオブジェクトを取得
     *
     * @return DbManager
     */
    //initialize()で作成したDb_managerオブジェクトを返す
    public function getDbManager()
    {
        return $this->db_manager;
    }

    /**
     * コントローラファイルが格納されているディレクトリへのパスを取得
     *
     * @return string
     */
    //initialize()で作成したDb_managerオブジェクトを返す
    public function getControllerDir()
    {
        //?
        return $this->getRootDir() . '/controllers';
    }

    /**
     * ビューファイルが格納されているディレクトリへのパスを取得
     *
     * @return string
     */
    public function getViewDir()
    {
        return $this->getRootDir() . '/views';
    }

    /**
     * モデルファイルが格納されているディレクトリへのパスを取得
     *
     * @return stirng
     */
    public function getModelDir()
    {
        return $this->getRootDir() . '/models';
    }

    /**
     * ドキュメントルートへのパスを取得
     *
     * @return string
     */
    public function getWebDir()
    {
        return $this->getRootDir() . '/web';
    }

    /**
     * アプリケーションを実行する
     *
     * @throws HttpNotFoundException ルートが見つからない場合
     */
    //index.phpで呼び出し
    public function run()
    {
        
        try {
            //true or falseが代入
            $params = $this->router->resolve($this->request->getPathInfo());
            if ($params === false) {
                //例外を送信
                throw new HttpNotFoundException('No route found for ' . $this->request->getPathInfo());
            }

            $controller = $params['controller'];
            $action = $params['action'];

            $this->runAction($controller, $action, $params);
        } catch (HttpNotFoundException $e) {
            //render404Page($e)メゾットを実行
            $this->render404Page($e);
        } catch (UnauthorizedActionException $e) {
            /*
             * list 配列と同様の形式で、複数の変数への代入を行う
             * $info = array('コーヒー', '茶色', 'カフェイン');
             * list($drink, $color, $power) = $info;
             * echo "$drink の色は $color で、$power が含まれています。\n";
             */
            //login_actionメゾットを実行し、戻り値をそれぞれ$controller, $actionに代入
            list($controller, $action) = $this->login_action;
            //runAction($controller, $action)メゾットを実行
            $this->runAction($controller, $action);
        }
        
        $this->response->send();
    }

    /**
     * 指定されたアクションを実行する
     *
     * @param string $controller_name
     * @param string $action
     * @param array $params
     *
     * @throws HttpNotFoundException コントローラが特定できない場合
     */
    public function runAction($controller_name, $action, $params = array())
    {
        //ucfirst 文字列の最初の文字を大文字にする
        $controller_class = ucfirst($controller_name) . 'Controller';
        //true or falseを返す
        $controller = $this->findController($controller_class);
        if ($controller === false) {
            //例外を実行
            throw new HttpNotFoundException($controller_class . ' controller is not found.');
        }

        $content = $controller->run($action, $params);

        $this->response->setContent($content);
    }

    /**
     * 指定されたコントローラ名から対応するControllerオブジェクトを取得
     *
     * @param string $controller_class
     * @return Controller
     */
    protected function findController($controller_class)
    {
        if (!class_exists($controller_class)) {
            $controller_file = $this->getControllerDir() . '/' . $controller_class . '.php';
            if (!is_readable($controller_file)) {
                return false;
            } else {
                require_once $controller_file;

                if (!class_exists($controller_class)) {
                    return false;
                }
            }
        }

        return new $controller_class($this);
    }

    /**
     * 404エラー画面を返す設定
     *
     * @param Exception $e
     */
    protected function render404Page($e)
    {
        $this->response->setStatusCode(404, 'Not Found');
        $message = $this->isDebugMode() ? $e->getMessage() : 'Page not found.';
        $message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

        $this->response->setContent(<<<EOF
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>404</title>
</head>
<body>
    {$message}
</body>
</html>
EOF
        );
    }
}
