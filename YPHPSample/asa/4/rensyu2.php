<?php
$b = [];
$b[] = 5;
$b[] = 12;
$b[] = 25;
$b[] = 8;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
</head>
<body>
  <table border="1">
  <?php
  foreach($b as $dat){
  	echo"<tr><td>" . $dat . "</td></tr>";
  }
  ?>
  </table>
<?php
$sum = array_sum($b);
echo"合計値:" . $sum . "<br>\n";
$avg = array_sum($b) / count($b);
echo"平均値:" . $avg . "\n";
?>
  </body>
</html>
