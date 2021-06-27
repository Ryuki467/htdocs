<!DOCTYPE html>
<html lang="ja">
<head>
<title>サンプル</title>
</head>
<body>
<?php
$data = [];
$data[] = 20;
$data[] = 30;
$data[] = 15;
$data[] = 15;

$avg = getAverage($data);

function getAverage($a){
	$avg = array_sum($a)/ count($a);
	return $avg;
}

print $avg."<br/>\n";
?>
</body>
</html>