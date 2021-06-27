<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$fm = ["hours","minutes","seconds","year","mon","month","mday","wday","weekday"];

?>

<table border = "2">
<tr bgcolor = "#AAAAAA"><th>指定</th><th>値</th></tr>

<?php

$dt = getdate();

foreach($fm as $value){
	echo "<tr><td>{$value}</td><td>";
	echo $dt[$value];
	echo "</td></tr>\n";
}

?>

</table>

</body>
</html>
