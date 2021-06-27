<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$stock = array("みかん"=>80,"いちご"=>60,"りんご"=>22,"もも"=>50,"くり"=>75);

?>

<table border="2">
<tr bgcolor="#AAAAAA">
<th>商品名</th>
<th>個数</th>
</tr>

<?php
echo"<pre>";

while(list($name,$value)=each($stock)){
	print"<tr><td>{$name}</td><td>{$value}個</td></tr>\n";
}
var_dump($name,$value);
var_dump($stock);

?>

</table>

</body>
</html>
