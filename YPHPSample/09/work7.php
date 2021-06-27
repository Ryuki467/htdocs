<!DOCTYPE html>
<html>
<head>
<title>ワーク7</title>
</head>
<body>

<?php

$zipcode = ["123-4567", "1234567"];
$pattern = ["[0-9]{3}-[0-9]{4}", "[0-9]{7}"];
?>

<table border = "2">
<tr><th>文字</th><th>マッチ</th></tr>

<?php

foreach($zipcode as $zip){
	foreach($pattern as $pat){
		echo"<tr><td>{$zip}</td>";
		if(preg_match("/" . $pat . "/", $zip)){
			echo"<td>〇</td>";
		}else{
			echo"<td>×</td>";
		}
		echo"</tr>";
	}
}

?>

</table>

</body>
</html>
