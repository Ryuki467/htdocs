<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$product = "鉛筆";
$price = 50;
$num = 10;

$total = buy($product,$price,$num);

echo "合計{$total}円です。<br/>\n";

function buy($pr,$pc,$nm){
	echo"<hr/>商品「{$pr}」を{$pc}円で{$nm}個お買い上げいただきました。<br/><hr/>\n";
	$tt = $pc * $nm;
	return $tt;
}

?>

</body>
</html>