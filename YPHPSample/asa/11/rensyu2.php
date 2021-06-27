<?php
$m = 1; //仕入れ量
$p = 0.8; //仕入れ量における販売できた率
$q = 0.4; //売れ残りのお惣菜の販売率
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
</head>
<body>
  <table border="1">
  <tr><th>仕入れた生鮮食品</th><th>販売量</th><th>お惣菜の販売量</th><th>売れ残った量</th></tr>
  <?php
    echo "<tr>";
    echo "<td>" . $m . "kg</td>\n";
    $sales = $m * $p;
    echo "<td>" . $sales . "kg</td>\n";
    $sales2 = $m * (1 - $p) * $q;
    echo "<td>" . $sales2  . "kg</td>\n";
    $remaining = $m - (($m * $p) + ($m * (1 - $p) * $q));
    echo "<td>" . $remaining . "kg</td>\n";
    echo "</tr>\n";
  ?>
  </table>
  </body>
</html>