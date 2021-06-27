<form action = "work9.php" method ="post">
	<table>
		<tr><th>名前</th><td><?php echo $data->getName(); ?></td></tr>
		<tr><th>年齢</th><td><?php echo $data->getAge(); ?></td></tr>
		<tr><th>趣味</th><td><?php echo $data->getHobby(); ?></td></tr>
		<tr><th>都道府県</th><td><?php echo $data->getPrefecture(); ?></td></tr>
		<tr><th>好きな映画</th><td><?php echo $data->getMovie(); ?></td></tr>
		<tr><th>好きな音楽</th><td><?php foreach ($data->getMusic() as $val) echo $val. "&nbsp;"; ?></td></tr>
		<tr><th>コメント</th><td><?php echo $data->getComment(); ?></td></tr>
		<tr><th></th><td><a href="work9.php">戻る</a></td></tr>
	</table>
</form>
