<!DOCTYPE html>
<html>
<head>
<title>sample</title>
</head>
<body>
​
<form action="Sample15.php" method="post">
タイトル:<input type="text" name = "sbj"/><br/>
宛先:<input type="text" name = "to"/><br/>
<textarea rows="10" cols="50" name="msg" ></textarea><br/>
<input type="submit" value = "送信"/>
</form>
​
<?php
​
$to = null;
if(isset($_POST["to"])) $to = $_POST["to"];
$sbj = null;
if(isset($_POST["sbj"])) $sbj = $_POST["sbj"];
$msg = null;
if(isset($_POST["msg"])) $msg = $_POST["msg"];
​
$hdr = "Content-Type:text/plain;charset=ISO-2022-JP";
​
mb_language("ja");
​
$sbj=mb_convert_encoding($sbj,"JIS","UTF-8");
$msg=mb_convert_encoding($msg,"JIS","UTF-8");
​
if(isset($_POST["to"])){
​
	if($error = mb_send_mail($to,$sbj,$msg,$hdr)){
		echo "送信しました。\n";
	}else{
        var_dump($error);
		echo "送信に失敗しました。\n";
	}
}
?>
</body>
</html>