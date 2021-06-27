<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$city[0] = "東京";
$city[1] = "名古屋";
$city[2] = "京都";
$city[3] = "大阪";
$city[4] = "福岡";

?>

<table border="2">
<tr bgcolor="#AAAAAA">
<th>都市名</th>
</tr>

<?php

for($i=0; $i<count($city); $i++){
	print"<tr><td>{$city[$i]}</td></tr>\n";
}


?>

</table>

</body>
</html>
