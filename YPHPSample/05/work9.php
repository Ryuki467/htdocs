<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<table border="9">
<?php

for($i=9; $i>=1; $i--){
	print"<tr>\n";
	for($j=9; $j>=1; $j--){
	$num = $i * $j;
	print"<td>{$num}</td>";
	}
	print"</tr>\n";
}

?>

</table>

</body>
</html>
