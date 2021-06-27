<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<table border="2">
<tr bgcolor="#AAAAAA">
<th>番号</th>
<th>内容</th>
</tr>
<?php
$status = stat("Sample1.php");
foreach($status as $name => $value){
	echo"<tr><td>{$name}</td><td>{$value}</td></tr>\n";
}
?>
</table>
</body>
</html>