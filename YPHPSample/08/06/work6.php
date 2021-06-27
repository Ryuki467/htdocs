<?php 
	require_once "ListDisplay.class.php"; 
	require_once "TableDisplay.class.php"; 
?>
<!DOCTYPE html>
<html>
<head>
<title>ワーク6</title>
</head>
<body>

<?php

$data = [
	"Yahoo" => "http://www.yahoo.co.jp/",
	"Rakuten" => "http://www.rakuten.co.jp/",
	"Google" => "http://www.google.co.jp/",
	"Amazon" => "http://www.amazon.co.jp/",
];
$list = new ListDisplay($data);
$list->show();
echo"<hr/>";
$table = new TableDisplay($data);
$table->show();

?>

</body>
</html>
