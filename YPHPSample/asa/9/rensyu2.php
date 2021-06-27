<?php
$setting = [
    "id" => "yamada",
    "password" => "abcdef",
    "database" => "sales_system",
];
$setting = getSetting($setting);

function getSetting($data){
    $_defaults = [
        "id" => "root",
        "password" => "root",
        "database" => "default",
        "host" => "localhost",
    ];
    // ここで「array_merge」関数を利用して配列を結合して戻り値として返す
    return array_merge($_defaults,$data);

}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<table border="1">
<tr><td>キー</td><td>値</td></tr>
<?php
foreach($setting as $key => $value){
    print "<tr>";
    print "<td>{$key}</td>";
    print "<td>{$value}</td>";
    print "</tr>";
}
?>
</table>
</body>
</html>
