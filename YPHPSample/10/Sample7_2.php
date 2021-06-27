<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<h2>2Fのご案内</h2>
<hr/>

<?php

if(!isset($_SESSION["date"])){
	echo"<hr><a href=\"Sample7_1.php\">1Fからごらんください。</a>\n";
}else{
	echo"{$_SESSION["date"]}に入店されました。<br/>\n";
}

?>

</body>
</html>
