<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$product = "鉛筆";
$price = 50;

buy($product,$price);

function buy($pr,$pc){
	echo"<hr/>商品「{$pr}」を{$pc}円でお買い上げいただきました。<br/><hr/>\n";
}

?>

</body>
</html>