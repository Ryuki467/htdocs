<?php $this->setLayoutVar('title','グループ一覧画面') ?>
<br>
<a href="<?php echo $base_url; ?>/groups/new">グループ新規作成</a>
<table border='1'>
	<tr bgcolor=#b4f7f2><th>グループ</th><th>参加人数</th><th>アクション</th></tr>
	<?php for($i=0; $i<count($group_user); $i++){?>
    	<tr>
        	<td><?php echo $this->escape($group_user[$i]["title"]);?></td>
        	<td>&emsp;<?php echo $group_user[$i]["menber"];?></td>
        	<?php $member_flg = false; ?>
        	<?php for($j=0; $j<count($group_users); $j++){ ?>
        		<?php if($group_user[$i]["group_id"] == $group_users[$j]["group_id"]){ ?>
        			<?php if($user["id"] == $group_users[$j]["id"]){ ?>
        				<?php $member_flg = true; ?>
        			<?php } ?>
        		<?php } ?>
        	<?php } ?>
        	<?php if($member_flg){ ?>
        		 <td>&ensp;参加中</td>
        	<?php }else{ ?>
        		<td><a href="<?php echo $base_url; ?>/groups/insert?group_id=<?php echo $group_user[$i]["group_id"]; ?>">参加する</td>
        	<?php } ?>
    	</tr>
	<?php } ?>
</table>