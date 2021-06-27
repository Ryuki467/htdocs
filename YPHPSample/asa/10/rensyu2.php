<?php
$data = [
    "yamada:21:tokyo:sales",
    "sato:25:chiba:sales",
    "suzuki:30:kanagawa:marketing",
    "ota:24:tokyo:pr",
];

// ここでchangeValue関数を宣言する
function changeValue($val){
	$val = explode(":",$val);
	return implode(",",$val);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<table border="1">
<tr><td>元の値</td><td>変換後の値</td></tr>
<?php
foreach($data as $value){
    $value2 = changeValue($value);
    print "<tr>";
    print "<td>{$value}</td>";
    print "<td>{$value2}</td>";
    print "</tr>";
}
?>
</table>
</body>
</html>
