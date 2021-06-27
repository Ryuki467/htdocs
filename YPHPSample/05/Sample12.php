<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<table border="9">
<?php

for($i=1; $i<=9; $i++){
	print"<tr>\n";
	for($j=1; $j<=9; $j++){
	$num = $i * $j;
	print"<td>{$num}</td>";
	}
	print"</tr>\n";
}

?>

</table>

</body>
</html>
