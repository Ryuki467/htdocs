<?php
$books = [];

$book = [];

$book['title'] = "初めてのJS";
$book['price'] = 1900;
$book['unit']  = 2;

$books[] = $book;

$book = [];

$book['title'] = "パーフェクトJS";
$book['price'] = 3400;
$book['unit']  = 3;

$books[] = $book;

$sum = 0;
$i = 0;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
</head>
<body>
  <table border="1">
<tr><th>タイトル</th><th>金額</th><th>個数</th><th>合計</th></tr>
<?php foreach($books as $boo){ ?>
	<?php echo"<tr><td>" . $boo['title'] . "</td><td>" . $boo['price'] . "</td><td>" . $boo['unit'] . "</td><td>" . $boo['price']*$boo['unit'] . "</td></tr>"; ?>
	<?php $sum += $boo['price']*$boo['unit']; ?>
	<?php $i++; ?>
<?php } ?>
  </table>
<?php echo"合計:" . $sum . "<br>\n"; ?>
<?php echo"平均:" . $sum/$i . "\n"; ?>
</body>
</html>
