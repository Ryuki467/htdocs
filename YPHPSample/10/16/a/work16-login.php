<form action = "work16.php" method ="post">
<?php
	$id = "yamada";
	$password = "13579";
?>

<!-- HTMLの入力画面ファイル -->
	<h1>フォーム</h1>
	<!--この部分が認証エラー時のメッセージ-->
		<?php if(!empty($_POST["id"]) || !empty($_POST["password"])){ ?>
			<?php if($_POST["id"] !== $id || $_POST["password"] !== $password){ ?>
				<div style="margin:10px;padding:10px;borer:1px solid red;background-color:red;color:#fff;">
				<?php echo"IDとパスワードが間違っています"; ?>
				</div>
			<?php } ?>
		<?php } ?>
	<!--ここまで-->
	<table>
		<tr><th>ID</th><td><input type="text" class = "form-control" name = "id" value = "<?php echo $data->getId(); ?>"></td></tr>
		<!--エラーメッセージが表示される-->
			<?php if(empty($_POST["id"]) || empty($_POST["password"])){ ?>
				<tr><th></th><td style="color:red"><?php echo"必須項目です"; ?></td></tr>
			<?php } ?>
		<!--ここまで-->
		<tr><th>パスワード</th><td><input type="password" class = "form-control" name = "password" value = "<?php echo $data->getPassword(); ?>" ></td></tr>
		<!--エラーメッセージが表示される-->
			<?php if(!empty($_POST["id"]) || !empty($_POST["password"])){ ?>
				<?php if(!is_numeric($_POST["password"])){ ?>
					<tr><th></th><td style="color:red"><?php echo"パスワードには数値を入力してください"; ?></td></tr>
				<?php } ?>
			<?php } ?>
		<!--ここまで-->
		<tr><th></th><td>
			<input type="hidden" name = "action" value = "auth" />
			<input type="submit" class = "btn btn-info" value = "ログイン">
		</td></tr>
	</table>
</form>

