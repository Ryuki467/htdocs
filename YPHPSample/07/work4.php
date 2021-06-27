<!DOCTYPE html>
<html>
<head>
<title>ワーク4</title>
</head>
<body>

<?php

$sales = [
	["last_name" => "山田","first_name" => "太郎","price" => "2100","unit" => "3"],
	["last_name" => "佐藤","first_name" => "二郎","price" => "1500","unit" => "4"],
	["last_name" => "細川","first_name" => "三郎","price" => "3000","unit" => "1"],
	["last_name" => "岸本","first_name" => "四郎","price" => "1200","unit" => "7"],
];

?>

<?php

foreach($sales as $sale){
	extract($sale);
	$getTotal = getTotal($price,$unit);
	showData($last_name,$first_name,$getTotal);
}

function showData($l,$f,$g){
	global $sale;
	global $getTotal;
	echo"{$l}{$f}さんの購入金額合計は{$g}円<br/>";
}

function getTotal($p,$u){
	return $p * $u;
}

?>

</body>
</html>
