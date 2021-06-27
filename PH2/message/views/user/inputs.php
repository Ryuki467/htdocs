<table>
	<?php if(UserController::$register_flg){ ?>
	<tr>
		<th>ログインID</th>
		<td><input type="text" style="width: 300px; height: 30px;" name="login_id" value="<?php echo $this->escape($login_id); ?>" /></td>
	</tr>
	<tr>
		<th>パスワード</th>
		<td><input type="password" style="width: 300px; height: 30px;" name="password" value="<?php echo $this->escape($password); ?>" /></td>
	</tr>
	<tr>
		<th>パスワード(再確認用)</th>
		<td><input type="password" style="width: 300px; height: 30px;" name="password2" value="<?php echo $this->escape($password); ?>" /></td>
	</tr>
	<tr>
		<th>ニックネーム</th>
		<td><input type="text" style="width: 300px; height: 30px;" name="nickname" value="<?php echo $this->escape($nickname); ?>" /></td>
	</tr>
	<?php }else{ ?>
	<tr>
		<th>ID</th>
		<td><input type="text" style="width: 300px; height: 30px;" name="login_id" value="<?php echo $this->escape($login_id); ?>" /></td>
	</tr>
	<tr>
		<th>パスワード</th>
		<td><input type="password" style="width: 300px; height: 30px;" name="password" value="<?php echo $this->escape($password); ?>" /></td>
	</tr>
	<?php } ?>
</table>