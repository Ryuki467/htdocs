<?php
$data = [];
$data[] = "山田";
$data[] = "佐藤";
$data[] = "山田";
$data[] = "山本";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
</head>
<body>
<table border="1">
<?php 
// ここに処理を作成する
foreach($data as $dat){
	echo"<tr><td>$dat</td></tr>";
}
// ここまで
?>
</table>
</body>
</html>
