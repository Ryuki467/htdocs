<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<table border="2">
<tr bgcolor="#AAAAAA">
<th>イメージ</th>
<th>商品名</th>
</tr>

<?php

for($i=0; $i<5; $i++){
	print"<tr>\n";
	print"<td><img src=\"{$i}.jpg\"/></td><td>商品{$i}</td>\n";
	print"</tr>\n";
}

?>

</table>

</body>
</html>
