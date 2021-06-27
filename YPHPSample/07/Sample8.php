<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

create_headline("商品納期のご案内",1);
echo"在庫があります場合は3営業日以内にお届けいたします。<br/>\n";
echo"在庫がない場合は24時間以内に納期のご連絡をいたします。<br/>\n";

create_headline("商品送料のご案内",2);
echo"全国一律1000円にて配送いたしております。<br/>\n";

function create_headline($head,$num){
	echo"<h$num>{$head}</h$num><hr/>";
}

?>

</body>
</html>