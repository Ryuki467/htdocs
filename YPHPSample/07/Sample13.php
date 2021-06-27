<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$x = 5;
square($x);

function square($x){
	$z = $x * $x;
	echo"{$x}の2乗は{$z}です。<br/>\n";
}

?>

</body>
</html>