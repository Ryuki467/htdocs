<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<table border="2">
<tr bgcolor="#AAAAAA">
<th>iの値</th>
<th>jの値</th>
</tr>

<?php

for($i=0; $i<5; $i++){
	for($j=0; $j<3; $j++){
		print"<tr><td>{$i}</td><td>{$j}</td></tr>\n";
	}
}

?>

</table>

</body>
</html>
