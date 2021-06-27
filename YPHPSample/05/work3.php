<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<table border="1">
<?php

for($i=1; $i<=30; $i++){
	$num = $i % 3;
	if($num != 0){
		print"<tr><td>{$i}</td></tr>";
	}
}

?>

</table>

</body>
</html>
