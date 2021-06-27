<!DOCTYPE html>
<html>
<head>
<title>ワーク5</title>
</head>
<body>

<?php

$tags = [
	"<font color ='red'><b>Yahoo</b></font>",
	"<font color ='darkred'><b>Rakuten</b></font>",
	"<font color ='darkorange'><b>Amazon</b></font>",
	"<font color ='blue'><b>Google</b></font>",
];

?>

<table border = "1">
<tr><th>変換前</th><th>変換後</th></tr>

<?php

foreach($tags as $tag){
	$tag_after = h($tag);
	echo"<tr><td>{$tag}</td>";
	h();
	echo"<td>{$tag_after}</td></tr>";
}

function h(){
	global $tag;
	return $tag_after = htmlspecialchars($tag);
}
?>

</body>
</html>
