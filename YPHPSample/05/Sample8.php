<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$ch=0;

for($i=0; $i<5; $i++){
	for($j=0; $j<5; $j++){
		if($ch == 0){
			print"<img src=\"{$ch}.jpg\"/>\n";
			$ch = 1;
		}else{
			print"<img src=\"{$ch}.jpg\"/>\n";
			$ch = 0;
		}
	}
	print"<br/>\n";
}

?>

</body>
</html>
