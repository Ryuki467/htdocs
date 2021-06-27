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

if(in_array("神奈川" , $prefectures)){
	$key = array_search("神奈川" , $prefectures);
	echo "<tr><td>$prefectures[$key]</td></tr>\n";
}

?>

</table>

</body>
</html>
