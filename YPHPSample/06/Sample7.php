<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$stock = array("みかん"=>80,"いちご"=>60,"りんご"=>22,"もも"=>50,"くり"=>57);

?>

<table border="2">
<tr bgcolor="#AAAAAA">
<th>商品名</th>
<th>個数</th>
</tr>

<?php

foreach($stock as $name => $value){
	print"<tr><td>{$name}</td><td>{$value}個</td></tr>\n";
}


?>

</table>

</body>
</html>
