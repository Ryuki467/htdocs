<?php
$triangles = [];
$triangle = [
    "base" => 10,
    "height" => 5,
];
$triangles[] = $triangle;
$triangle = [
    "base" => 7,
    "height" => 4,
];
$triangles[] = $triangle;

//ここに「getTriangleArea」関数を定義する
function getTriangleArea($tr){
	return $tr["base"] * $tr["height"] / 2;
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<table border="1">
<tr><td>底辺</td><td>高さ</td><td>面積</td></tr>
<?php
foreach($triangles as $triangle){
    $area  = getTriangleArea($triangle);
    print "<tr>";
    print "<td>{$triangle['base']}</td>";
    print "<td>{$triangle['height']}</td>";
    print "<td>{$area}</td>";
    print "</tr>";
}
?>
</table>
</body>
</html>
