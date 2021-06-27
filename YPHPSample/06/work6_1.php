<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$prefectures = ["東京","神奈川","埼玉","群馬","千葉","茨木","栃木",];

?>

<table border="1">
<tr>
<th>都道府県名</th>
</tr>

<?php

foreach($prefectures as $prefecture){
	if($prefecture == "神奈川"){
		echo"<tr><td>{$prefecture}</td></tr>\n";
	}
}

?>

</table>

</body>
</html>
