<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php
echo __FILE__;
echo"<hr/>\n";
echo"現在". __LINE__ ."行目...";
funcA();
echo"現在". __LINE__ ."行目...";
funcB();
echo"現在". __LINE__ ."行目...";
funcA();

function funcA(){
	echo"<hr/>\n";
	echo __FUNCTION__;
	echo"<hr/>\n";
}

function funcB(){
	echo"<hr/>\n";
	echo __FUNCTION__;
	echo"<hr/>\n";
}

?>

</body>
</html>
