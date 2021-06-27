<!DOCTYPE html>
<html>
<head>
<title>ワーク3</title>
</head>
<body>

<?php

$a_tags = [
	"<a href=\"http://www.yahoo.co.jp/\">Yahoo</a>",
	"<a href=\"http://www.rakuten.co.jp/\">Rakuten</a>",
	"<a href=\"http://www.google.co.jp/\">Amazon</a>",
	"<a href=\"http://www.amazon.co.jp/\">Google</a>",
];

?>

<table border = "1">
<tr><th>変換前</th><th>変換後</th></tr>

<?php

foreach($a_tags as $a_tag){
	echo"<tr><td>{$a_tag}</td>";
	$a_tag_after = strip_tags($a_tag);
	echo"<td>{$a_tag_after}</td></tr>";
}

?>

</body>
</html>
