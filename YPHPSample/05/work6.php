<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php
for($i=2; $i<=100; $i++){
	$is_prime = true;
	for($j=2; $j<$i; $j++){
		$num = $i % $j;
		if($num == 0){
			$is_prime = false;
			break;
		}
	}
	if($is_prime == true){
		print"{$i}\n";
	}
}

?>

</body>
</html>
