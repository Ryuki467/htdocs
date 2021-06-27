<?php 
	require_once "SmartPhoneProduct.class.php"; 
	require_once "KeitaiProduct.class.php"; 
	require_once "kantanProduct.class.php"; 
?>
<!DOCTYPE html>
<html>
<head>
<title>ワーク4</title>
</head>
<body>

<?php

$product = [];
$product[] = new SmartPhoneProduct("iPhone5",60000,"Softbank","Apple");
$product[] = new SmartPhoneProduct("Experia Z Ultra",50000,"DoCoMo","Sony");
$product[] = new KeitaiProduct("SH-23",30000,"DoComo","Sharp");
$product[] = new KantanProduct("P-41",25000,"DoComo","Panasonic");

?>

<table border="1">
<tr><th>名前</th><th>金額</th><th>キャリア</th><th>メーカ</th><th>カテゴリ</th></tr>
<?php
foreach($product as $pr){
?>
<tr>
	<td><?php echo $pr->getName(); ?></td>
	<td><?php echo $pr->getPrice(); ?></td>
	<td><?php echo $pr->getCarrier(); ?></td>
	<td><?php echo $pr->getMaker(); ?></td>
	<td><?php echo $pr->getCategoryName(); ?></td>
</tr>
<?php
}

?>

</table>

</body>
</html>
