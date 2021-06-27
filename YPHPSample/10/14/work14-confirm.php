<form action = "work14.php" method ="post">
	<h1>確認画面</h1>
	<table>
		<tr><th>名前</th><td><?php echo $data->getName(); ?></td></tr>
		<tr><th>年齢</th><td><?php echo $data->getAge(); ?></td></tr>
		<tr><th>趣味</th><td><?php echo $data->getHobby(); ?></td></tr>
		<tr>
			<th></th>
			<td>
				<a href="work14.php">戻る</a>
				<input type="submit" class="btn btn-primary" value="送信" />
				<input type="hidden" name="action" value="finish"/>
			</td>
		</tr>
	</table>
</form>
