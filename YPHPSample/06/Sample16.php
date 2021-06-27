<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$data = array(
	array("東京",32,25),
	array("名古屋",28,21),
	array("大阪",27,20),
	array("京都",26,19),
	array("福岡",27,22),
);

?>

<table border="2">
<tr bgcolor="#AAAAAA">
<th>都市名</th>
<th>最高気温</th>
<th>最低気温</th>
</tr>

<?php

foreach($data as $city){
	print "<tr>";
	foreach($city as $value){
		print"<td>{$value}</td>";
	}
	print"</tr>\n";
}

?>

</table>

</body>
</html>
