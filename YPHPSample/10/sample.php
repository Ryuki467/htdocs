<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<form action = "http://localhost/YPHPSample/Rensyu/10/sample.php" method = "post">
タイトル:<input type="text" name="sbj" value="【新規登録完了】在席管理アプリ"/><br/>
宛先:<input type="text" name="to"/><br/>
<textarea rows = "10" cols = "50" name = "msg"></textarea><br/>
<input type = "submit" value = "送信"/>
</form>

<?php
echo"<hr/>\n";
echo"新規ユーザ登録完了のお知らせ\n";
echo"<hr/>\n";
echo"この度は、「在席管理アプリ」をご利用ありがとうございます。<br/>\n";
echo"このメールは、ユーザ登録が完了したことをご確認頂くためお送りしているものです。\n";
echo"<hr/>\n";
echo"<br/>\n";
echo"▪ユーザ情報<br/><br/>\n";
echo"ユーザ名：<br/>\n";
echo"パスワード：\n";
echo"<hr/>\n";
echo"<br/>\n";
echo"<br/>\n";
echo"▪お知らせ\n";
echo"<br/>\n";
echo"ご不明な点がございましたら気軽にご連絡下さい。<br/>\n";
echo"また、今後ともよろしくお願い申し上げます。。<br/>\n";
echo"<br/>\n";
echo"お問い合わせ先<br/>\n";
echo"http://localhost:8080/Zaiseki/";

if(isset($_POST["to"]))
	$to = $_POST["to"];
if(isset($_POST["sbj"]))
	$sbj = $_POST["sbj"];
else
	$sbj = null;
if(isset($_POST["msg"]))
	$msg = $_POST["msg"];
else
	$msg = null;
$hdr = "Content-Type: text/plain;charset = ISO-2022-JP";
mb_language("ja");

$sbj = mb_convert_encoding($sbj, "JIS", "UTF-8");
$msg = mb_convert_encoding($msg, "JIS", "UTF-8");
var_dump($_POST["to"]);
if(isset($_POST["to"])){
	if(mb_send_mail($to, $sbj, $msg, $hdr)){
		echo"送信しました。\n";
	}else{
		echo"送信に失敗しました。\n";
	}
}

?>

</body>
</html>
