<?php $this->setLayoutVar('title','ログイン') ?>

<form action="<?php echo $base_url; ?>/user/login" method="post">
	<input type="hidden" name="_token" value="<?php echo $this->escape($_token); ?>" />
	<?php if(isset($errors) && count($errors) > 0): ?>
		<?php echo $this->render('errors',['errors' => $errors]); ?>
	<?php endif; ?>
	<?php echo $this->render('user/inputs',['mail' => $mail, 'password' => $password,]); ?>
	<p>
		<input type="submit" style="margin: 0 95px 0; font-size: 15px; font-weight: bold; border-radius: 5px; width: 150px; height: 40px;" value="ログイン" />
	</p>
</form>