<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$employees = [
	["name" => "山田","seibetu" => "m","age" => "33","section" => "営業"],
	["name" => "佐藤","seibetu" => "f","age" => "24","section" => "庶務"],
	["name" => "高橋","seibetu" => "m","age" => "21","section" => "営業"],
	["name" => "前田","seibetu" => "m","age" => "25","section" => "企画"],
	["name" => "鈴木","seibetu" => "f","age" => "23","section" => "営業"],
	["name" => "上田","seibetu" => "f","age" => "32","section" => "広報"],
	["name" => "東野","seibetu" => "m","age" => "32","section" => "庶務"],
	["name" => "小山","seibetu" => "f","age" => "29","section" => "営業"],
	["name" => "坂本","seibetu" => "f","age" => "24","section" => "企画"],
	["name" => "阿部","seibetu" => "f","age" => "29","section" => "営業"],
];

?>

<?php

$man_age = 0;
$woman_age = 0;
$i = 0;
$j = 0;

foreach($employees as $employee){
	if($employee["seibetu"] == "m"){
		$man_age += $employee["age"];
		$i++;
	}else if($employee["seibetu"] == "f"){
		$woman_age += $employee["age"];
		$j++;
	}
}

$man_age /= $i;
$woman_age /= $j;

?>

<?php

echo"男性社員の平均年齢は{$man_age}才です<br>\n";
echo"女性社員の平均年齢は{$woman_age}才です<br>\n";

?>

</body>
</html>
