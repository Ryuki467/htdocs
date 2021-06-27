<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$test = array(80,60,22,50,75);

?>

<table border="2">
<tr>
<th>番号</th>
<th>点数</th>
</tr>

<?php

foreach($test as $id => $value){
	print"<tr><td>{$id}</td><td>{$value}</td></tr>\n";
}

$num = array_sum($test);

?>

</table>

<?php

print"合計点は{$num}です。";

?>

</body>
</html>
