<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$num1 = 11;
$num2 = 9;

$msg = ($num1 == $num2)? "2つの数は同じ値です。": "{$num2}より{$num1}のほうが大きい値です。";

print $msg."<br/>\n";

?>

</body>
</html>
