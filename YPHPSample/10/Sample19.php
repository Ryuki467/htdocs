<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<h2>店内のご案内</h2>
<hr/>

<?php if(!isset($_SESSION["name"])){ ?>
	<p>お客様のお名前をどうぞ</p>
	<form action = "http://localhost/YPHPSample/Rensyu/10/Sample18_2.php" method = "post">
	<input type = "text" name = "name"/>
	<input type = "submit" value = "送信"/>
	</form>
<?php }else{ ?>
	<?php
	echo"{$_POST["name"]}さん。いらっしゃいませ。<br/>\n";
	?>
<?php } ?>
</select>

</body>
</html>
