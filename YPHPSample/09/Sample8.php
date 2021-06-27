<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$ptr = ["P*", "P+", "P?", "P{3}"];
$str = ["H", "PP", "PPP", "PPPP"];

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
