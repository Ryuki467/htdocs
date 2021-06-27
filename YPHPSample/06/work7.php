<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$kanto = ["東京","神奈川","埼玉","群馬","千葉","茨木","栃木"];
$shikoku = ["香川","徳島","愛媛","高知"];

?>

<table border="2">

<?php

$japan = array_merge($kanto , $shikoku);

foreach($japan as $i => $value){
	echo"<tr><td>{$i}</td><td>{$value}</td></tr>\n";
}

?>

</table>

</body>
</html>