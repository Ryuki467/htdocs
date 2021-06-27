<?php
	if(!isset($_SERVER["PHP_AUTH_USER"])){
		header("WWW-Authenticate: Basic realm=\"realm\"");
		header("HTTP/1.0 401 Unauthorized");
		exit("401 Unauthorized");
	}else{
		if($_SERVER["PHP_AUTH_USER"]!= "admin"){
			header("WWW-Authenticate: Basic realm=\"realm\"");
			header("HTTP/1.0 401 Unauthorized");
			exit("401 Unauthorized");
		}
	}
?>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$city = ["東京","名古屋","京都","大阪","福岡"]

?>

<h2>出発地のご案内</h2>

<form>
<select name ="city">

<?php

foreach($city as $name => $value){
	echo"<option value = {$value}>{$value}</option>";
}

?>
</select>
</form>

</body>
</html>
