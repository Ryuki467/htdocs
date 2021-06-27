<!DOCTYPE html>
<html>
<head>
<title>ワーク9</title>
</head>
<body>

<?php

$a_tags = [
	"<a href=\"http://www.yahoo.co.jp/\">Yahoo</a>",
	"<a href=\"http://www.rakuten.co.jp/\">Rakuten</a>",
	"<a href=\"http://www.google.co.jp/\">Amazon</a>",
	"<a href=\"http://www.amazon.co.jp/\">Google</a>",
];
$pattern = "\"[^\"]+\"";
?>

<table border = "1">
<tr><th>文字</th><th>URL</th></tr>

<?php

foreach($a_tags as $a_tag){
	$a_tag_after = htmlspecialchars($a_tag, ENT_QUOTES, "UTF-8");
	echo"<tr><td>{$a_tag_after}</td>";
	if(preg_match("/" . $pattern . "/", $a_tag, $matched)){
			echo"<td>{$matched[0]}</td>";
		}else{
			echo"<td></td>";
		}
	echo"</tr>";
}

?>

</body>
</html>
