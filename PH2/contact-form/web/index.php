<?php
//webファイル内のbootstrap.phpの読み込み
require_once '../bootstrap.php';
//webファイル内のContactFormApplication.phpの読み込み
require_once '../ContactFormApplication.php';

//ContactFormApplicationのオブジェクトを作成　コンストラクタはApplication内に存在
$app = new ContactFormApplication(true);
//ContactFormApplicationインスタンスのrunメゾットを実行　実際にはApplication内のメゾット
$app->run();