<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$num = 0;
$store = true;

print "ようこそ。<br/>\n";
print "<hr/>\n";

if($num <= 0 && $store == true){
	print "お取り寄せ可能です<br/>\n";
}
elseif($num <= 0 && $store == false){
	print "在庫切れです。<br/>\n";
}
elseif($num <= 3){
	print "在庫が僅少です。<br/>\n";
}

else{
	print "在庫があります。<br/>\n";
}

print "<hr/>\n";
print "ごゆっくりお過ごしください。<br/>\n";

?>

</body>
</html>