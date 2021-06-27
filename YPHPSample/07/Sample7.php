<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$product = [[100,5],[20,16],[25,40]];

?>

<table border="2">
<tr bgcolor="#AAAAAA">
<th>単価</th>
<th>個数</th>
<th>小計</th>
</tr>

<?php

for($i=0; $i<3; $i++){
	$p = $product[$i][0];
	$n = $product[$i][1];
	$t = total($p, $n);
	print"<tr><td>{$p}円</td><td>{$n}個</td><td>{$t}円</td></tr>\n";
}

function total($pr,$n){
	return $pr*$n;
}

?>

</body>
</html>