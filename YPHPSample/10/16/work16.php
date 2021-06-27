<?php
	//アプリケーションを起動するファイル
	require_once("Controller.class.php");
	require_once("Logic.class.php");
	require_once("Data.class.php");
	require_once("ErrorMessage.class.php");
	require_once("Validation.class.php");
	//クラスLogicのインスタンスを作成
	$logic = new Logic();
	
	//インスタンス$logicに含まれるメゾットsetData(new Data())を呼び出す
	$logic->setData(new Data());
	
	//Controller内のsetLogic($logic)にアクセス(を動かす）
	Controller::setLogic($logic);
	
	//Controller内のexecute()にアクセス(を動かす）
	Controller::execute();
	
	//インスタンス 製造されたオブジェクトのこと
	//メゾット（関数）
?>
