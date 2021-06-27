<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$product[0] = "鉛筆";
$product[1] = "消しゴム";
$product[2] = "定規";
$product[3] = "コンパス";
$product[4] = "ボールペン";

?>

<table border="2">
<tr bgcolor="#AAAAAA">
<th>商品名</th>
</tr>

<?php

for($i=0; $i<5; $i++){
	print"<tr><td>{$product[$i]}</td></tr>\n";
}

?>

</table>

</body>
</html>
