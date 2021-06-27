<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$a = 0;

for($i=0; $i<5; $i++)
	func();

function func(){
	global $a;
	$b = 0;
	static $c = 0;
	echo"<hr/>変数\$aは{$a}変数\$bは{$b}変数\$cは{$c}<br/>\n";
	$a++;
	$b++;
	$c++;
}

?>

</body>
</html>