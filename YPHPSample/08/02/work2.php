<?php require "Product.class.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>ワーク2</title>
</head>
<body>

<?php

$product = [];
$product[] = new Product("消しゴム",140);
$product[] = new Product("ハサミ",430);

?>

<table border="1">
<tr><th>名前</th><th>金額</th></tr>
<?php
foreach($product as $pr){
?>
<tr>
	<td><?php echo $pr->getName(); ?></td>
	<td><?php echo $pr->getPrice(); ?></td>
</tr>
<?php
}
?>

</table>

</body>
</html>
