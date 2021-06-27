<?php $this->setLayoutVar('title','ホーム') ?>

<p>参加しているグループ一覧</p>
<br>

<table border='1'>
	<tr bgcolor=#b4f7f2><th>グループ名</th><th>遷移</th></tr>
	<?php for($i=0; $i<count($groups); $i++){?>
    	<tr>
        	<td><?php echo $this->escape($groups[$i]["title"]);?></td>
        	<td><a href="<?php echo $base_url; ?>/groups/timeline?group_id=<?php echo $groups[$i]["group_id"]; ?>">タイムライン</td>
    	</tr>
	<?php } ?>
</table>