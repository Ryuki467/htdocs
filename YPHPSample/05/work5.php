<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<table border="1">
<?php

for($i=1; $i<=40; $i++){
	$num = $i % 4;
	if($num == 1){
		print"<tr><td>{$i}</td>";
	}else if($num == 0){
		print"<td>{$i}</td></tr>";
	}else{
		print"<td>{$i}</td>";
	}
}

?>

</table>

</body>
</html>
