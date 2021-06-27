<?php 
//まず最初に前回作成した「Employeeクラス」のファイルを読み込む
	require_once "Employee.class.php";

$employees = [];

$employees[] = new Employee("ジョナサン", 24, "総務");
$employees[] = new Employee("マイケル", 25, "企画");
$employees[] = new Employee("ターニャ", 25, "マーケ");

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
</head>
<body>
<table border="1">
<tr>
<th>名前</th>
<th>年齢</th>
<th>部署</th>
</tr>
<?php 
$count = count($employees);
// ここに処理を作成する
for($i=0; $i<$count; $i++){
	echo"<tr><td>". $employees[$i]->getName() ."</td>";
	echo"<td>". $employees[$i]->getAge() ."</td>";
	echo"<td>". $employees[$i]->getSection() ."</td></tr>";
}
// ここまで
?>
</table>
</body>
</html>
