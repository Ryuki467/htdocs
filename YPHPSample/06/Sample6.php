<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$city = array("東京","名古屋","京都","大阪","福岡");

?>

<table border="2">
<tr bgcolor="#AAAAAA">
<th>番号</th>
<th>都市名</th>
</tr>

<?php

foreach($city as $id => $value){
	print"<tr><td>{$id}</td><td>{$value}</td></tr>\n";
}


?>

</table>

</body>
</html>
