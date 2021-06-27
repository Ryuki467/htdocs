<table>
	<tr>
		<th>ユーザID</th>
		<td><input type="text" name="user_name" value="<?php echo $this->escape($user_name); ?>" /></td>
	</tr>
	<tr>
		<th>パスワード</th>
		<td><input type="password" name="password" value="<?php echo $this->escape($password); ?>" /></td>
	</tr>
<?php if(UserController::$register_flg){ ?>
	<tr>
		<th>メールアドレス</th>
		<td><input type="text" name="mail" value="<?php echo $this->escape($password); ?>" /></td>
	</tr>
<?php } ?>
</table>