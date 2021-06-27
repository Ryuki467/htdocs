<?php $this->setLayoutVar('title','グループのタイムライン画面') ?>

<?php if(isset($message)): ?>
<div id="message"><?php echo $this->escape($message); ?></div>
<?php endif; ?>

<h2>グループ名：<?php echo $this->escape($groups["title"]); ?></h2>

<?php for($i=0; $i<count($chates); $i++){ ?>
	<?php echo $this->escape($chates[$i]["nickname"]); ?><br>
	<?php echo $this->escape($chates[$i]["message"]); ?><br><hr/>
<?php } ?>


<form action="<?php echo $base_url; ?>/groups/timeline?group_id=<?php echo $groups["group_id"]; ?>" method="post">
	<textarea name="message" style="background-color: #b4f7f2; border-radius: 10px;"; rows="5" cols="40"></textarea><br>
	<input type="submit" style="margin: 5px; background-color: #b4f7f2; font-size: 15px; font-weight: bold; border-radius: 5px; width: 150px; height: 40px;" value="投稿" />
</form>