<?php

$a = 10;
$b = 15;
$c = 21;

$answer1 = getMax ( $a, $b );
$answer2 = getMax ( $c, $a );

// ここに関数「getMax」を定義する
function getMax($a,$b){
	return max($a,$b);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
  <div>答え1：<?php echo $answer1; ?></div>
  <div>答え2：<?php echo $answer2; ?></div>
</body>
</html>
