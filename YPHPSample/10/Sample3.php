<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<h2>商品のご選択</h2>

<form action = "http://localhost/YPHPSample/Rensyu/10/Sample3.php" method = "post">
<input type = "text" name = "product"/>
<input type = "submit" value = "送信"/>
</form>

<?php

if(isset($_POST["product"]))
	echo"「{$_POST["product"]}」をお買い上げいただきました。<br/>\n";

?>

</select>

</body>
</html>
