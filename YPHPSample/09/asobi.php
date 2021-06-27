<!DOCTYPE html>
<html>
<head>
<title>ワーク</title>
</head>
<body>

<?php

$rest = [substr("abcdef", 0, -1), substr("abcdef", 2, -1), substr("abcdef", 1, -2), substr("abcdef", -3, -1)];

?>

<table border = "1">
<tr><th>変換後</th></tr>

<?php

foreach($rest as $res){
	echo"<tr><td>{$res}</td></tr>";
}

?>

</body>
</html>
