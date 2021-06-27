<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$color1 = ["blue" => "#0000ff","red" => "#ff0000","green" => "#00ff00","fuchsia" => "##FF00FF"];
$color2 = ["aqua" => "#00FFFF","green" => "#00ff01","aqua" => "#00FFFF","palegreen" => "#98FB98"];

?>

<table border="1">

<?php

$color = array_merge($color1 , $color2);

foreach($color as $i => $value){
	echo"<tr><td bgcolor=\"$value\">{$i}</td></tr>\n";
}

?>

</table>

</body>
</html>