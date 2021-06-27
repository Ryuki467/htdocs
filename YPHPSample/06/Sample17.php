<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$test = array(80,60,22,50,75);

?>

</table>

<table border="2">
<tr bgcolor="#AAAAAA">
<th>番号</th>
<th>点数</th>
</tr>

<?php

foreach($test as $id => $value){
	print"<tr><td>{$id}</td><td>{$value}</td></tr>\n";
}

rsort($test);

?>

</table>

<?php

print"<br>最高点は{$test[0]}です。";

?>

</body>
</html>
