<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<table border="1">
<?php

for($i=1; $i<=10; $i++){
	$num = $i % 2;
	if($num == 1){
		print"<tr bgcolor=\"#AAAAAA\">\n";
	}else{
		print"<tr>\n";
	}
	print"<td>商品{$i}を表示します。</td>\n";
	print"</tr>\n";
}

?>

</table>

</body>
</html>
