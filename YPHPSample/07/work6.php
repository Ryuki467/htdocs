<!DOCTYPE html>
<html>
<head>
<title>ワーク6</title>
</head>
<body>

<?php

$a = 12;
$b = 20;

echo "変換前<br/>";
echo "\$a => {$a}<br/>";
echo "\$b => {$b}<br/>";

swap($a,$b);

echo "変換後<br/>";
echo "\$a => {$a}<br/>";
echo "\$b => {$b}<br/>";

function swap($a,$b){
	global $a;
	global $b;
	$c = $a;
	$a = $b;
	$b = $c;
}

?>

</body>
</html>
