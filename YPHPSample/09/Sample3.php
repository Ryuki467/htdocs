<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$str = ["Hello", "GoodBye", "Thankyou"];

?>

<table border="2">
<tr bgcolor = "#AAAAAA">
<th>文字列</th><th>大文字</th><th>小文字</th><th>逆順</th><th>略称</th>
</tr>

<?php

foreach($str as $value){
	echo"<tr><td>{$value}</td><td>";
	echo strtoupper($value);
	echo"</td><td>";
	echo strtolower($value);
	echo"</td><td>";
	echo strrev($value);
	echo"</td><td>";
	echo substr($value, 0, 3);
	echo"</td></tr>\n";
}

?>

</table>

</body>
</html>
