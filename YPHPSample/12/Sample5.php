<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<form action="http://localhost/YPHPSample/Rensyu/12/Sample5.php" method="post">
ファイル名;<input type ="text" name="title"/><br/>
<textarea rows="10" cols="50" name="content">
</textarea><br/>
<?php
if(isset($_POST["title"]) && file_exists($_POST["title"])){
	$fp = fopen($_POST["title"], "w");
	fputs($fp, $_POST["content"]);
	fclose($fp);
}
?>
<input type="submit" value="書込"/>
</from>
</body>
</html>