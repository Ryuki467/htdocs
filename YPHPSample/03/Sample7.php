<!DOCTYPE html>
<html lang="ja">
<head>
<title>サンプル</title>
</head>
<body>

<?php

$num1 = 10;
$num2 = 5;
$num3 = $num1 + $num2;
$num4 = $num1 - $num2;
$num5 = $num1 * $num2;
$num6 = $num1 / $num2;
$num7 = $num1 % $num2;

?>

<table border="2">
<tr bgcolor="#AAAAAA">
<th>項目</th>
<th>結果</th>
</tr>

<?php

print "<tr><td>\$num1</td><td>{$num1}</td></tr>\n";
print "<tr><td>\$num2</td><td>{$num2}</td></tr>\n";
print "<tr><td>\$num1+\$num2</td><td>{$num3}</td></tr>\n";
print "<tr><td>\$num1-\$num2</td><td>{$num4}</td></tr>\n";
print "<tr><td>\$num1*\$num2</td><td>{$num5}</td></tr>\n";
print "<tr><td>\$num1/\$num2</td><td>{$num6}</td></tr>\n";
print "<tr><td>\$num1%\$num2</td><td>{$num7}</td></tr>\n";

?>

</table>

</body>
</html>