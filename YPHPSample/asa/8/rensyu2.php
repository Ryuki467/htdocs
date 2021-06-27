<?php
$prices = [1000,800,400,1200];

// ここで「getTax」を定義する
function getTax($p){
	return $p * 0.08;
}
// ここで「getTotal」を定義する
function getTotal($p){
	return $p * 1.08;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<table border="1">
<tr><td>金額</td><td>消費税</td><td>合計</td></tr>
<?php
foreach($prices as $price){
    $tax = getTax($price);
    $total = getTotal($price);
    print "<tr>";
    print "<td>{$price}</td>";
    print "<td>{$tax}</td>";
    print "<td>{$total}</td>";
    print "</tr>";
}
?>
</table>
</body>
</html>
