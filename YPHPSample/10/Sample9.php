<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$fm = ["c", "y/m/d", "D", "F", "h:i:s"];

?>

<table border = "2">
<tr bgcolor = "#AAAAAA"><th>指定</th><th>日時</th></tr>

<?php

foreach($fm as $value){
	echo "<tr><td>{$value}</td><td>";
	echo date($value);
	echo "</td></tr>\n";
}

?>

</table>

</body>
</html>
