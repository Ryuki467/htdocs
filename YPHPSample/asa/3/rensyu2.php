<?php
$data = [70,85,15,20,55];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
</head>
<body>
  <table border="1">
  <?php
  foreach($data as $key => $dat){
  	echo"<tr><td>" . $key . "</td>";
  	echo"<td>" . $dat . "</td></tr>";
  }
  ?>
  </table>
  </body>
</html>
