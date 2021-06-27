<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$x = 5;
$y = 10;

mini($x,$y);

function mini($x, $y){
	echo"1番目の数値は{$x}です。<br/>\n";
	echo"2番目の数値は{$y}です。<br/>\n";
	$z = compact("x","y");
	sort($z);
	echo"<br/>最小値は{$z[0]}です。<br/>\n";
}

?>

</body>
</html>