<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<table border="2">
<tr bgcolor ="#AAAAAA">
<th>タイトル</th>
<th>解説</th>
<th>日付</th>
</tr>

<?php

$doc = simplexml_load_file("http://localhost/YPHPSample/Rensyu/13/Sample.rss");

foreach($doc->channel->item as $list){
	echo "<tr><td><a href=\"$list->link\">". $list->title ."</a></td>";
	echo "<td>" . $list->description . "</td>";
	echo "<td>" . $list->pubDate . "</td></tr>";
}

?>
</table>

</body>
</html>