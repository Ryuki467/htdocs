<?php
//webファイル内のbootstrap.phpの読み込み
require_once '../bootstrap.php';
//webファイル内のEmployeeApplication.phpの読み込み
require_once '../BlogApplication.php';
//EmployeeApplicationのオブジェクトを作成　コンストラクタはApplication内に存在
$app = new BlogApplication(true);
//EmployeeApplicationインスタンスのrunメゾットを実行　実際にはApplication内のメゾット
$app->run();