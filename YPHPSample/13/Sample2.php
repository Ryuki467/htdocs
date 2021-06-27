<?php
$doc = new DOMDocument;
$doc->load("Sample.xml");

$list = $doc->getElementsByTagName("name");

for($i=0; $i<$list->length; $i++){
	$node = $list->item($i);
	$utxt = $node->nodeValue;
	echo $utxt . "<br>\n";
}
?>
