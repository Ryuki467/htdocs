<!DOCTYPE html>
<html>
<head>
<title>ワーク5</title>
</head>
<body>

<?php

$name = "山田";
$age = 23;
$section = "広報";

replace();

echo $name."<br/>";
echo $age."<br/>";
echo $section."<br/>";

function replace(){
	global $name;
	global $age;
	global $section;
	$name = "佐藤";
	$age = 28;
	$section = "庶務";
}

?>

</body>
</html>
