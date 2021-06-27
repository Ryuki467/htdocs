<form action = "work16.php" method ="post">
<?php
	require_once("ErrorMessage.class.php");
	$error_message = new ErrorMessage;
?>
<!-- HTMLの入力画面ファイル -->
	<h1>フォーム</h1>
	
	<!--この部分が認証エラー時のメッセージ-->
		<?php if($error_message->is_error("auth")){ ?>
			<div style="margin:10px;padding:10px;borer:1px solid red;background-color:red;color:#fff;">
			<?php echo $error_message->getErrorMessage("auth"); ?>
			</div>
		<?php } ?>
	<!--ここまで-->
	
	<table>
		<tr><th>ID</th><td><input type="text" class = "form-control" name = "id" value = "<?php echo $data->getId(); ?>"></td></tr>
		
		<!--エラーメッセージが表示される-->
			<?php if($error_message->is_error("id")){ ?>
				<tr><th></th><td style="color:red"><?php echo $error_message->getErrorMessage("id"); ?></td></tr>
			<?php } ?>
		<!--ここまで-->
		
		<tr><th>パスワード</th><td><input type="password" class = "form-control" name = "password" value = "<?php echo $data->getPassword(); ?>" ></td></tr>
		
		<!--エラーメッセージが表示される-->
			<?php if($error_message->is_error("password")){ ?>
				<tr><th></th><td style="color:red"><?php echo $error_message->getErrorMessage("password"); ?></td></tr>
			<?php } ?>
		<!--ここまで-->
		
		<tr><th></th><td>
			<input type="hidden" name = "action" value = "auth" />
			<input type="submit" class = "btn btn-info" value = "ログイン">
		</td></tr>
	</table>
</form>
