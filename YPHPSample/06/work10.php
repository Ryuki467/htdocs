<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$name = "山田";
$age = "23";
$seibetu = "f";
$section = "広報";
$employees[] = compact("name","age","seibetu","section");

$name = "佐藤";
$age = "28";
$seibetu = "f";
$section = "開発";
$employees[] = compact("name","age","seibetu","section");

?>

<table border="1">
<tr><th>名前</th><th>年齢</th><th>性別</th><th>部署</th></tr>

<?php

foreach($employees as $employee){
	extract($employee);
	$seibetu =($seibetu == "m")? "男":"女";
	echo"<tr><td>{$name}</td><td>{$age}</td><td>{$seibetu}</td><td>{$section}</td></tr>";
}

?>

</table>

</body>
</html>