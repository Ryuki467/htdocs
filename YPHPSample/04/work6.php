<!DOCTYPE html>
<html>
<head>
<title>ワーク6</title>
</head>
<body>

<?php

$a = 0;

if(isset($a)){
	print "isset($a) is true<br/>\n";
}else{
	print "isset($a) is false<br/>\n";
}

if(empty($a)){
	print "empty($a) is true<br/>\n";
}else{
	print "empty($a) is false<br/>\n";
}

if(is_string($a)){
	print "is_string($a) is true<br/>\n";
}else{
	print "is_string($a) is false<br/>\n";
}

if(is_numeric($a)){
	print "is_numeric($a) is true<br/>\n";
}else{
	print "is_numeric($a) is false<br/>\n";
}

?>

</body>
</html>
