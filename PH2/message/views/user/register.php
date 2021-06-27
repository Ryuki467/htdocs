<?php $this->setLayoutVar('title','ユーザ登録') ?>

<h2>新規ユーザ登録</h2>
<form action="<?php echo $base_url; ?>/user/register" method="post">
	<input type="hidden" name="_token" value="<?php echo $this->escape($_token); ?>" />
	<?php if(isset($errors) && count($errors) > 0): ?>
		<?php echo $this->render('errors',['errors' => $errors]); ?>
	<?php endif; ?>
	<?php echo $this->render('user/inputs',['login_id' => $login_id, 'password' => $password,'nickname' => $nickname,]); ?>
	<p>
		<input type="submit" style="margin: 0 205px 0; font-size: 15px; font-weight: bold; width: 100px; height: 30px;" value="登録" />
	</p>
</form>