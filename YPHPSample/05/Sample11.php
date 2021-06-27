<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

print"1～10までの偶数を出力します。<br/>\n";

for($i = 1; $i < 11; $i++){
		$num = $i % 2;
		if($num == 0){
			print "{$i}<br/>\n";
		}
}

?>

</body>
</html>