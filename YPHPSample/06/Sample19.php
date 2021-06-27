<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$text = array("a","l","g","e","b","r","a");

?>

</table>

<table border="2">

<?php
print"<tr><td>変換前</td><td>\n";
for($i=0; $i<count($text); $i++){
	print "{$text[$i]}";
}
print"</td></tr>\n";

for($i=0; $i<count($text); $i++){
	if($text[$i] == "a"){
		$text[$i] = "b";
	}
}

print"<tr><td>変換後</td><td>\n";
for($i=0; $i<count($text); $i++){
	print "{$text[$i]}";
}
print"</td></tr>\n";

?>

</table>

</body>
</html>
