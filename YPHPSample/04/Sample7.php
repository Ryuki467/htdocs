<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$num = 10;

print "ようこそ。<br/>\n";
print "<hr/>\n";

switch($num){
	case 0:
	print "在庫切れです。<br/>\n";
	break;
	
	case 1:
	case 2:
	case 3:
	print "在庫僅少です。<br/>\n";
	break;
	
	default:
	print "在庫があります。<br/>\n";
	break;
}

print "<hr/>\n";
print "ごゆっくりお過ごしください。<br/>\n";

?>

</body>
</html>