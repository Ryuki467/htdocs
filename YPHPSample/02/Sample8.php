<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<table border="2">

<?php

printf ("<tr><td>10進数</td><td>%d</td></tr>",18);
printf ("<tr><td>2進数</td><td>%b</td></tr>",18);
printf ("<tr><td>8進数</td><td>%o</td></tr>",18);
printf ("<tr><td>16進数</td><td>%x</td></tr>",18);
printf ("<tr><td>浮動小数点数(3桁)</td><td>%.3f</td></tr>",3.14);
printf ("<tr><td>浮動小数点数(6桁)</td><td>%.6f</td></tr>",3.14);
printf ("<tr><td>文字列</td><td>%s</td></tr>","Hello");

?>

</table>

</body>
</html>
