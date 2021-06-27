<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<table border="2">

<?php

$doc = new DOMDocument;
$doc->load("Sample.rss");

$list = $doc->getElementsByTagName("item");

foreach($list as $node){
	echo "<tr><td>" . $node->nodeValue . "</td></tr>";
}

?>
</table>

</body>
</html>