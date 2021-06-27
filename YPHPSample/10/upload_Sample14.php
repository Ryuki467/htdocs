<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<form enctype="multipart/form-data" action = "http://localhost/YPHPSample/Rensyu/10/Sample14.php" method = "post">
ファイル:<input type="file" name="myfile"/><br/>
<input type = "submit" value = "送信"/>
</form>

<?php

if(isset($_FILES["myfile"]["tmp_name"])){
	$filename = "./upload_" . $_FILES["myfile"]["name"];
	if(move_uploaded_file($_FILES["myfile"]["tmp_name"],$filename)){
		echo"送信しました。\n";
	}else{
		echo"送信に失敗しました。\n";
	}
}

?>

</body>
</html>
