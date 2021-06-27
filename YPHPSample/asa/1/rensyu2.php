<?php
$data = [];
$triangle = [
    "base" => 9,
    "height" => 4,
];
$data[] = $triangle;
$triangle = [
    "base" => 4,
    "height" => 5,
];
$data[] = $triangle;
?>	
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
</head>
<body>
<table border="1">
<tr>
  <th>底辺</th><th>高さ</th><th>三角形の面積</th>
</tr>
<?php 
// ここに処理を作成する
foreach($data as $key => $dat){
	echo"<tr><td>" .$dat["base"]. "</td><td>" .$dat["height"]. "</td><td>" . $dat["base"]*$dat["height"]/2 . "</td></tr>";
}
// ここまで
?>
</table>
</body>
</html>
