<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content"text/html; charset=utf8" />
	<title><?php if(isset($title)): echo $this->escape($title) . ' - '; endif; ?>マイクロブログ</title>
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $base_url; ?>/css/style.css" />
</head>
<body>
	<div id="header">
		<h1><a href="<?php echo $base_url; ?>/">マイクロブログ</a></h1>
	</div>
	<div id="nav">
		<p>
    		<?php if($session->isAuthenticated()): ?>
    			<?php if(empty($this->defaults["session"]->get("user")["nickname"])){
        		  $name = "名無し";
        		}else{
        		  $name = $this->defaults["session"]->get("user")["nickname"];
        		}
        		?>
        		<?php echo"ようこそ、" . $this->escape($name); ?>さん
        		<a href="<?php echo $base_url; ?>/user">ユーザ情報更新</a>
        		<a href="<?php echo $base_url; ?>/follow/index">ユーザ一覧</a>
        		<a href="<?php echo $base_url; ?>/favorite/index">お気に入り</a>
        		<a href="<?php echo $base_url; ?>/user/logout">ログアウト</a>
        	<?php else: ?>
        		<a href="<?php echo $base_url; ?>/user/login">ログイン</a>
        		<a href="<?php echo $base_url; ?>/user/register">新規ユーザ登録</a>
        	<?php endif; ?>
		</p>
	</div>
	<div id="main">
		<?php echo $_content; ?>
	</div>
</body>
</html>