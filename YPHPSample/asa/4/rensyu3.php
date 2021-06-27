<?php
$products = [];

$product = [];
$product['name'] = "鉛筆";
$product['price'] = 120;
$product['unit'] = 3;
$products[] = $product;

$product = [];
$product['name'] = "万年筆";
$product['price'] = 520;
$product['unit'] = 2;
$products[] = $product;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
</head>
<body>
  <table border="1">
  <tr><th>製品名</th><th>金額</th><th>個数</th><th>合計</th></tr>
  <?php
  $sum = 0;
  foreach($products as $product){
  	echo"<tr><td>" . $product["name"] . "</td>";
  	echo"<td>" . $product["price"] . "</td>";
  	echo"<td>" . $product["unit"] . "</td>";
  	echo"<td>" . $product["price"]*$product["unit"] . "</td></tr>";
  	$sum += $product["price"]*$product["unit"];
  }
  ?>
  </table>
<?php
echo"総計:" . $sum . "<br>\n";
?>
  </body>
</html>
