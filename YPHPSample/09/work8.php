<!DOCTYPE html>
<html>
<head>
<title>ワーク5</title>
</head>
<body>

<?php

$files = ["sales.xls","note.txt","document.pdf","index.html"];
$pattern = "\.[a-z]{3,4}";
?>

<table border = "2">
<tr><th>文字</th><th>拡張子</th></tr>

<?php

foreach($files as $file){
	echo"<tr><td>{$file}</td>";
	if(preg_match("/" . $pattern . "/", $file, $matched)){
		echo"<td>{$matched[0]}</td>";
	}else{
		echo"<td></td>";
	}
	echo"</tr>";
}

?>

</table>

</body>
</html>
