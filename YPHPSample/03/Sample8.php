<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<table border="2">
<tr bgcolor="#AAAAAA">
<th>項目</th>
</tr>

<?php

$msg1 ="こんにちは";
$msg2 ="さようなら";
$msg3 ="またあした";
print "<tr><td>". $msg1 . $msg2 . "</td></tr>\n";
print "<tr><td>". $msg2 . $msg3 . "</td></tr>\n";
print "<tr><td>". $msg1 . $msg3 . "</td></tr>\n";

?>

</table>

</body>
</html>
