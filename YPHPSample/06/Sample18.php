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

for($i=0; $i<count($test); $i++){
	if($test[$i] >= 70){
		$result[$i] = $test[$i];
	}
}

$num = count($result);

print"<br>70点以上の学生は{$num}人です。";

?>

</body>
</html>
