<?php $this->setLayoutVar('title','ユーザ情報') ?>
<style>
th{
	border: 1px solid #000;
	padding: 10px 5px;
	background-color: #b4f7f2;
}
td{
	border: 1px solid #000;
	padding: 10px 5px;
}
</style>
<h2>ユーザ情報更新</h2>

<?php if(! empty($message)): ?>
<div id="message"><?php echo $this->escape($message); ?></div>
<?php endif; ?>

<form action="<?php echo $base_url; ?>/user" method="post">
<table>
	<tr>
		<th>ユーザ名</th>
		<td><?php echo $user["login_id"]; ?></td>
	</tr>
	<tr>
		<th>ニックネーム</th>
		<td><input type="text" style="background-color: #b4f7f2; width: 150px; height: 20px;" name="nickname" value="<?php echo $this->escape($user['nickname']); ?>" /></td>
	</tr>		
</table>
<p>
	<input type="submit" style="background-color: #b4f7f2; margin: 0 30px 0; font-size: 15px; font-weight: bold; border-radius: 5px; width: 150px; height: 40px;"　value="更新" />
</p>
</form>