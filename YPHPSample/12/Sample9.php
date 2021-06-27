<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<table border="2">
<tr bgcolor="#AAAAAA">
<th>名前</th>
<th>最終アクセス時刻</th>
<th>最終修正時刻</th>
<th>作成時刻</th>
<th>サイズ</th>
</tr>
<?php
$curdir = opendir(".");
while($name = readdir($curdir)){
	$isd = fileatime($name);
	$isw = filemtime($name);
	$isr = filectime($name);
	$iss = filesize($name);
	echo"<tr><td>" . $name . "</td><td>" . date("Y/m/d H:i:s", $isd) . "</td><td>" . date("Y/m/d H:i:s", $isw) . "</td><td>" . date("Y/m/d H:i:s", $isr) . "</td><td>" .  $iss . "</td></tr>\n";
}
closedir($curdir);
?>
</table>
</body>
</html>