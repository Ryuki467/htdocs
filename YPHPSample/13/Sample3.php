<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php
$prs = xml_parser_create("UTF-8");
xml_set_element_handler($prs, "startElement", "endElement");
xml_set_character_data_handler($prs, "characterData");

$fp = fopen("Sample.xml", "r");
while($data = fgets($fp, 10000)){
	xml_parse($prs, $data, feof($fp));
}
xml_parser_free($prs);

function startElement($prs, $name, $attribute){
	echo"{$name}<br/>";
}
function endElement($prs, $name){
	echo"{$name}<br/>";
}
function characterData($prs, $data){
	echo"{$data}<br/>";
}
?>
</body>
</html>