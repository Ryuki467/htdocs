<?php
$text = "山田,佐藤,鈴木,井上";

// ここでexplode関数を利用して文字列を配列に分割する

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<table border="1">
<?php
$data = explode(",",$text);
foreach($data as $name){
    print "<tr><td>{$name}</td></tr>";
}
?>
</table>
</body>
</html>
