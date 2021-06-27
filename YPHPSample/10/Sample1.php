<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$city = ["東京", "名古屋", "京都", "大阪", "福岡"];

?>

<h2>出発地のご案内</h2>
<form>
<select name = "city">

<?php

foreach($city as $name => $value){
	echo"<option value = {$value}>{$value}</option>";
}

?>

</select>
</form>

</body>
</html>
