<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<h2>商品のご選択</h2>

<form action = "http://localhost/YPHPSample/Rensyu/10/Sample16.php" method = "post">
<textarea rows = "5" cols = "40" name = "product"></textarea><br/>
<input type = "submit" value = "送信"/>
</form>

<?php

if(isset($_POST["product"])){
	$newproduct = htmlspecialchars($_POST["product"]);
	echo"「{$newproduct}」をお買い上げいただきました。<br/>\n";
}

?>

</body>
</html>
