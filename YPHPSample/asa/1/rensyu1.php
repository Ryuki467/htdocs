<!DOCTYPE html>
<html lang="ja">
<head>
<title>サンプル</title>
</head>
<body>
<?php
$data = [12,24,10,30,18];
$sum = array_sum($data);
$avg = $sum / count($data);
print "合計値:".$sum."<br/>\n";
print "平均値:".$avg."<br/>\n";
?>
</body>
</html>