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

<table border="4">
<tr>
<th>名前</th>
<th>性別</th>
<th>年齢</th>
<th>部署</th>
</tr>

<?php

foreach($employees as $employee){
	print"<tr><td>{$employee["name"]}</td>\n";
	if($employee["seibetu"] == "m"){
		print"<td>男</td>\n";
	}else if($employee["seibetu"] == "f"){
		print"<td>女</td>\n";
	}
	print"<td>{$employee["age"]}</td><td>{$employee["section"]}</td></tr>\n";
}

?>

</table>

</body>
</html>
