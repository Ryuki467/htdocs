<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<table border="2">
<tr bgcolor="#AAAAAA">
<th>名前</th>
<th>ディレクトリ</th>
<th>書き込み</th>
<th>読み込み</th>
</tr>
<?php
$curdir = opendir(".");
while($name = readdir($curdir)){
	$isd = is_dir($name) ? "Directory": "File";
	$isw = is_writeable($name) ? "〇":"×";
	$isr = is_readable($name) ? "〇":"×";
	echo"<tr><td>{$name}</td><td>{$isd}</td><td>{$isw}</td><td>{$isr}</td></tr>\n";
}
closedir($curdir);
?>
</table>
</body>
</html>