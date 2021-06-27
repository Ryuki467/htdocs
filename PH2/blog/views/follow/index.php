<?php $this->setLayoutVar('title','ユーザ一覧') ?>

<!-ユーザネームが被ると大変なので、被らないようにする->

<table border="1">
<tr bgcolor=#b4f7f2>
	<th>ユーザ名</th>
	<th>フォロー数</th>
	<th>フォロワー数</th>
	<th>フォロー</th>
</tr>
<?php 
    /*
     * フォロー数、フォロワー数、フォローの有無はどうやって判断？　SQLにそういうカラムはない
     */
?>
<?php foreach($followes as $value){?>
<tr>
	<td><a href="<?php echo $base_url; ?>/tweet/single_index?user_id=<?php echo $value["user_id"]; ?>"><?php echo $this->escape($value["nickname"]); ?></a></td>
	<td><?php echo $value["follow"]; ?></td>
	<td><?php echo $value["follower"]; ?></td>
	<?php $follow_flg = false; ?>
    <?php for($i=0; $i<count($follow); $i++){?>
    	<?php if($follow[$i]["following_user_id"] === $value["user_id"]){ ?>
        	<?php $follow_flg = true; ?>
        <?php } ?>
    <?php } ?>
    <?php if($user["user_id"] == $value["user_id"] || $follow_flg){ ?>
    	<td>フォロー中</td>
    <?php }else{ ?>
    	<td><a href="<?php echo $base_url; ?>/follow/insert?following_user_id=<?php echo $value["user_id"]; ?>">フォローする</a></td>
    <?php } ?>
</tr>
<?php } ?>

</table>

		