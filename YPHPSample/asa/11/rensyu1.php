<?php
$m = 1;
$p = 0.8;
$q = 0.4;
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
    echo "<td>" . $m . "</td>";
    echo "<td>" . $m * $p . "</td>";
    echo "<td>" . $m * (1 - $p) * $q  . "</td>";
    //$s = $m - (($m * $p) + ($m * (1 - $p) * $q));
    echo "<td>" . ($m - (($m * $p) + ($m * (1 - $p) * $q))) . "</td>";
    echo "</tr>";
  ?>
  </table>
  </body>
</html>
