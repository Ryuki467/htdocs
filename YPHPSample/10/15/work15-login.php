<form action = "work15.php" method ="post">
	<h1>フォーム</h1>
	<table>
		<tr><th>ID</th><td><input type="text" class = "form-control" name = "id" value = "<?php echo $data->getId(); ?>"></td></tr>
		<tr><th>パスワード</th><td><input type="password" class = "form-control" name = "password" value = "<?php echo $data->getPassword(); ?>" ></td></tr>
		<tr><th></th><td>
			<input type="hidden" name = "action" value = "auth" />
			<input type="submit" class = "btn btn-info" value = "ログイン">
		</td></tr>
	</table>
</form>
