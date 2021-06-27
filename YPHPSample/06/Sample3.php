<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$stock["みかん"] = "80";
$stock["いちご"] = "60";
$stock["りんご"] = "22";
$stock["もも"] = "50";
$stock["くり"] = "75";

?>

<table border="2">
<tr bgcolor="#AAAAAA">
<th>商品名</th>
<th>在庫状況</th>
</tr>

<?php

foreach($stock as $name => $value){
	print"<tr><td>{$name}</td><td>{$value}個</td></tr>\n";
}

?>

</table>

</body>
</html>
