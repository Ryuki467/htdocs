<!DOCTYPE html>
<html>
<head>
<title>ワーク2</title>
</head>
<body>

<?php

$urls = [
	"http://www.yahoo.co.jp/",
	"http://www.rakuten.co.jp/",
	"http://www.google.co.jp/",
	"http://www.amazon.co.jp/",
];

?>

<table border = "1">
<tr><th>変換前</th><th>変換後</th></tr>

<?php

foreach($urls as $url){
	echo"<tr><td>{$url}</td>";
	$url_after = substr($url, 7);
	$url_after = substr($url_after, 0, -1);
	echo"<td>{$url_after}</td></tr>";
}

?>

</body>
</html>
