<!DOCTYPE html>
<html>
<head>
<title>ワーク6</title>
</head>
<body>

<?php

$a = "日本列島";
$b = "学校法人日本体育大学";
$c = "新日本プロレス";
$d = "西日本新聞";

mb_language("ja");
mb_internal_encoding("UTF-8");

$a_after = mb_substr($a, 0, 2);
$b_after = mb_substr($b, 4, 2);
$c_after = mb_substr($c, 1, 2);
$d_after = mb_substr($d, 1, 2);

echo "{$a_after}<br/>\n";
echo "{$b_after}<br/>\n";
echo "{$c_after}<br/>\n";
echo "{$d_after}<br/>\n";

?>

</body>
</html>
