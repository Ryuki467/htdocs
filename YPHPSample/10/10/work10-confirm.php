<form action = "work10.php" method ="post">
	<table>
		<tr><th>名前</th><td><?php echo $data->getName(); ?></td></tr>
		<tr><th>年齢</th><td><?php echo $data->getAge(); ?></td></tr>
		<tr><th>趣味</th><td><?php echo $data->getHobby(); ?></td></tr>
		<tr><th>都道府県</th><td><?php echo $data->getPrefecture(); ?></td></tr>
		<tr><th>好きな映画</th><td><?php echo $data->getMovie(); ?></td></tr>
		<tr><th>好きな音楽</th><td><?php foreach ($data->getMusic() as $val) echo $val. "&nbsp;"; ?></td></tr>
		<tr><th>コメント</th><td><?php echo $data->getComment(); ?></td></tr>
		<tr>
			<th></th>
			<td>
				<input type="hidden" name="action" value="finish"/>
				<input type="hidden" name="name" value="<?php echo $data->getName(); ?>"/>
				<input type="hidden" name="age" value="<?php echo $data->getAge(); ?>"/>
				<input type="hidden" name="hobby" value="<?php echo $data->getHobby(); ?>"/>
				<input type="hidden" name="prefecture" value="<?php echo $data->getPrefecture(); ?>"/>
				<input type="hidden" name="movie" value="<?php echo $data->getMovie(); ?>"/>
				<input type="hidden" name="comment" value="<?php echo $data->getComment(); ?>"/>
				<?php
					foreach ($data->getMusic() as $val){
						echo "<input type=\"hidden\" name=\"music[]\" value=\"{$val}\" />";
					}
				?>
				<a href="work10.php">戻る</a>
				<input type="submit" class="btn btn-primary" value="送信" />
			</td>
		</tr>
	</table>
</form>
