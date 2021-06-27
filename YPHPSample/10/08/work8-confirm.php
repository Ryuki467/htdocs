<form action = "work8.php" method ="post">
	<table>
		<tr><th>名前</th><td><?php echo "{$name}"; ?></td></tr>
		<tr><th>年齢</th><td><?php echo "{$age}"; ?></td></tr>
		<tr><th>趣味</th><td><?php echo "{$hobby}"; ?></td></tr>
		<tr><th>都道府県</th><td><?php echo "{$prefecture}"; ?></td></tr>
		<tr><th>好きな映画</th><td><?php echo"{$movie}"; ?></td></tr>
		<tr><th>好きな音楽</th><td><?php foreach($music as $val) echo $val. "&nbsp;"; ?></td></tr>
		<tr><th>コメント</th><td><?php echo"{$comment}"; ?></td></tr>
	</table>
</form>
