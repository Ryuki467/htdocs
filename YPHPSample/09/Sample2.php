<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$product = ["鉛筆", "消しゴム", "ボールペン"];

mb_language("ja");
mb_internal_encoding("UTF-8");

?>

<table border="2">
<tr bgcolor = "#AAAAAA">
<th>商品名</th><th>strlen</th><th>mb_strlen</th>
</tr>

<?php

foreach($product as $value){
	echo"<tr><td>{$value}</td><td>";
	echo strlen($value);
	echo"</td><td>";
	echo mb_strlen($value);
	echo"</td></tr>\n";
}

?>

</table>

</body>
</html>
