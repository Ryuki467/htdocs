<?php
$a = [20,40,10,5];
sort($a);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
</head>
<body>
  <table border="1">
  <?php
  foreach($a as $dat){
  	echo"<tr><td>" . $dat . "</td></tr>";
  }
  ?>
  </table>
  </body>
</html>
