<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$ch = 0;

for($i=5; $i>=1; $i--){
	for($j=1; $j<=5; $j++){
		if($i < $j){
		break;
		}
		print"<img src=\"{$ch}.jpg\"/>\n";
	}
	print"<br/>\n";
}


?>

</body>
</html>
