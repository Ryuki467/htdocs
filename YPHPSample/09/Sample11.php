<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$ptr = ["[012]{3}", "x[0-9A-Fa-f]{2,4}", "^[a-zA-Z_][a-zA-Z0-9_]*", "[0-9]{3}-[0-9]{4}"];
$str = ["113", "010", "xA", "x1","product", "12A_", "3330000", "106-0001"];

?>

<table border="2">
<tr bgcolor = "#AAAAAA">
<th>パターン</th><th>文字列</th><th>マッチ</th>
</tr>

<?php

foreach($ptr as $valueptr){
	foreach($str as $valuestr){
		echo"<tr><td>{$valueptr}</td><td>{$valuestr}</td>";
		$mt = preg_match("/". $valueptr. "/", $valuestr)? "〇": "×";
		echo"<td>{$mt}</td></tr>\n";
	}
}

?>

</table>

</body>
</html>
