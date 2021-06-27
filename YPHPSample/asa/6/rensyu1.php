<?php
$data = [
	["code"=>"KE001","name"=>"鉛筆","price"=>100],
	["code"=>"KE015","name"=>"消しゴム","price"=>50],
	["code"=>"KE022","name"=>"ボールペン","price"=>210],
];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
</head>
<body>
  <table border="1">
  <tr><th>product_code</th><th>product_name</th><th>price</th></tr>
  <?php
  foreach($data  as $item){
    echo "<tr>";
    echo "<td>{$item["code"]}</td>";
    echo "<td>{$item["name"]}</td>";
    echo "<td>{$item["price"]}</td>";
    echo "</tr>";
  }
  ?>
  </table>
  </body>
</html>
