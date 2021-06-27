<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<h2>商品のご選択</h2>

<form action="http://localhost/YPHPSample/Rensyu/14/Sample1.php" method="post">
<input type ="text" name="product"/>
<input type ="submit" value="送信"/>
</form>

<?php
try{
	if(isset($_POST["product"])){
		if($_POST["product"] == "")
			throw new Exception("入力してください");
		else
			echo"「{$_POST["product"]}」をお買い上げいただきました。<br/>\n";
	}
}catch(Exception $e){
	echo $e->getMessage();
}

?>

</body>
</html>
