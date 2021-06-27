<?php $this->setLayoutVar('title','ユーザ情報') ?>
<style>
th{
	border: 1px solid #000;
	padding: 10px 5px;
	background-color: #C0C0C0;
}
td{
	border: 1px solid #000;
	padding: 10px 5px;
}
</style>
<h2>ユーザ情報更新</h2>

<?php if(! empty($message)): ?>
<div id="message"><?php echo $message; ?></div>
<?php endif; ?>

<form action="<?php echo $base_url; ?>/user" method="post">
<table>
	<tr>
		<th>ユーザ名</th>
		<td><?php echo $user["mail"]; ?></td>
	</tr>
	<tr>
		<th>ニックネーム</th>
		<td><input type="text" style="background-color: #C0C0C0; width: 150px; height: 20px;" name="nickname" value="<?php echo $this->escape($user['nickname']); ?>" /></td>
	</tr>		
</table>
<p>
	<input type="submit" value="登録" />
</p>
</form>