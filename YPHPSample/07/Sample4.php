<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$product = "鉛筆";

buy($product);

function buy($pr){
	echo"<hr/>商品「{$pr}」をお買い上げいただきました。<br/><hr/>\n";
}

?>

</body>
</html>