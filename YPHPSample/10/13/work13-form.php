<form action = "work13.php" method ="post">
	<h1>フォーム</h1>
	<table>
		<tr><th>名前</th><td><input type="text" class = "form-control" name = "name" value = "<?php echo $data->getName(); ?>"></td></tr>
		<tr><th>年齢</th><td><input type="text" class = "form-control" name = "age" value = "<?php echo $data->getAge(); ?>" ></td></tr>
		<tr><th>趣味</th><td><input type="text" class = "form-control" name = "hobby" value = "<?php echo $data->getHobby(); ?>" ></td></tr>
		<tr><th></th><td><input type="submit" class = "btn" value = "送信"></td></tr>
	</table>
	<input type="hidden" name="action" value="confirm"/>
</form>
