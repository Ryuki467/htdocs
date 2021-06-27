<?php 
	require_once "SmartPhoneProduct.class.php"; 
	require_once "KeitaiProduct.class.php"; 
	require_once "kantanProduct.class.php"; 
	require_once "Cart.class.php"; 
?>
<!DOCTYPE html>
<html>
<head>
<title>ワーク5</title>
</head>
<body>

<?php

$sp = new SmartPhoneProduct("iPhone5",60000,"Softbank","Apple");
$ke = new KeitaiProduct("N-09A",26000,"DoCoMo","NEC mobile");
$ka = new KantanProduct("K0121",33000,"AU","Kyocerra");

$cart = new Cart();
$cart->addCart($sp,2);
$cart->addCart($ke,1);
$cart->addCart($ka,3);

?>

<h1>カートの中身</h1>
<table border="1">
<tr><th>カテゴリ</th><th>名前</th><th>金額</th><th>台数</th><th>小計</th></tr>
<?php
$item = $cart->getProducts();
while(list($name, $pr) = each($item)){
?>
<tr>
	<td><?php echo $cart->getProduct($name)->getCategoryName(); ?></td>
	<td><?php echo $cart->getProduct($name)->getName(); ?></td>
	<td><?php echo $cart->getProduct($name)->getPrice(); ?></td>
	<td><?php echo $cart->getProductUnit($name); ?></td>
	<td><?php echo $cart->getSubTotal($name); ?></td>
</tr>
<?php

}

?>

<tr><td colspan="4">合計</td><td><?php echo $cart->getTotal(); ?></td></tr>
</table>

</body>
</html>
