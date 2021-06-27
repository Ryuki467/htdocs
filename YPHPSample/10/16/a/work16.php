<?php

	//アプリケーションを起動するファイル
	require_once("Controller.class.php");
	require_once("Logic.class.php");
	require_once("Data.class.php");
	$logic = new Logic();
	$logic->setData(new Data());
	Controller::setLogic($logic);
	Controller::execute();
?>
