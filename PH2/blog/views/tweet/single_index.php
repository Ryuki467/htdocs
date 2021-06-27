<?php $this->setLayoutVar('title','個別ユーザつぶやき一覧画面') ?>
<?php for($j=0; $j<count($user); $j++){?>
	<?php if($user_id === $user[$j]["user_id"]){?>
		<h2><?php echo $this->escape($user[$j]["nickname"]);?>のつぶやき</h2>
	<?php } ?>
<?php } ?>

<?php 
    /*
     *　名前が変わらない
     * つぶやきの変えられない
     */
?>



<?php if(empty($tweetes)){ ?>

<?php }else{ ?>
    <?php for($i=0; $i<count($tweetes); $i++){?>
    	<?php if($user_id === $tweetes[$i]["user_id"]){?>
            <a href="<?php echo $base_url; ?>/tweet/single_index?user_id=<?php echo $tweetes[$i]["user_id"]; ?>"><?php echo $this->escape($tweetes[$i]["nickname"]);?></a>
            <?php $favorite_flg = false; ?>
            <?php for($l=0; $l<count($favorite); $l++){?>
            	<?php if($favorite[$l]["tweet_id"] === $tweetes[$l]["tweet_id"]){ ?>
            		<?php $favorite_flg = true; ?>
            	<?php } ?>
            <?php } ?>
            <?php if($favorite_flg){ ?>
            	<br>
            <?php }else{ ?>
            	<a href="<?php echo $base_url; ?>/favorite/insert?tweet_id=<?php echo $tweetes[$i]["tweet_id"]; ?>">お気に入りに追加</a><br>
            <?php } ?>
            <?php echo $this->escape($tweetes[$i]["body"]); ?><br>
            <a href="<?php echo $base_url; ?>/tweet/single_tweet?tweet_id=<?php echo $tweetes[$i]["tweet_id"]; ?>"><?php echo $tweetes[$i]["created_at"]; ?></a><hr/>
    	<?php } ?>
    <?php } ?>
<?php } ?>