<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$num = 9;
$number = $num % 2;

$msg = ($number == 0)? "{$num}は偶数です。": "{$num}は奇数です。";

print $msg."<br/>\n";

?>

</body>
</html>
