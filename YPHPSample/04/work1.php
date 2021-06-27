<!DOCTYPE html>
<html>
<head>
<title>ワーク1</title>
</head>
<body>

<?php

$a = "abc";
$b = 0;
$c = "0.0";
$d = 25;
$e = "yamada" . "@" . "example.com";

//これにより$aが「true」と判断されるかどうかがわかります
if($a){
	print"{$a} is true<br/>\n";
}else{
	print"{$a} is false<br/>\n";
}

//これにより$bが「true」と判断されるかどうかがわかります
if($b){
	print"{$b} is true<br/>\n";
}else{
	print"{$b} is false<br/>\n";
}

//これにより$cが「true」と判断されるかどうかがわかります
if($c){
	print"{$c} is true<br/>\n";
}else{
	print"{$c} is false<br/>\n";
}

//これにより$dが「true」と判断されるかどうかがわかります
if($d){
	print"{$d} is true<br/>\n";
}else{
	print"{$d} is false<br/>\n";
}

//これにより$eが「true」と判断されるかどうかがわかります
if($e){
	print"{$e} is true<br/>\n";
}else{
	print"{$e} is false<br/>\n";
}

?>

</body>
</html>
