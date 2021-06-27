<?php $this->setLayoutVar('title','ホーム') ?>

<!-新しいものが上にくるようにする->
<?php if(isset($message)): ?>
<div id="message"><?php echo $message; ?></div>
<?php endif; ?>
<form action="<?php echo $base_url; ?>/" method="post">
	<p>いま、何しているの？</p>
	<textarea name="body" rows="5" cols="40"></textarea><br>
	<input type="submit" style="margin: 5px; font-size: 15px; font-weight: bold; border-radius: 5px; width: 150px; height: 40px;" value="つぶやく" />
</form>
<br>
<?php if(empty($tweetes)){ ?>

<?php }else{ ?>
    <?php for($j=0; $j<count($tweetes); $j++){?>
    	<?php $follow_flg = false;?>
    	<?php for($l=0; $l<count($following); $l++){?>
    		<?php if($following[$l] == $tweetes[$j]["user_id"]){?>
    			<?php $follow_flg = true;?>
    		<?php } ?>
    	<?php } ?>
    	<?php if($follow_flg){ ?>
        	<a href="<?php echo $base_url; ?>/tweet/single_index?user_id=<?php echo $tweetes[$j]["user_id"]; ?>"><?php echo $this->escape($tweetes[$j]["nickname"]);?></a>
            <?php $favorite_flg = false; ?>
            <?php for($i=0; $i<count($favorite); $i++){?>
            	<?php if($favorite[$i]["user_id"] === $user["user_id"]){?>
                	<?php if($favorite[$i]["tweet_id"] === $tweetes[$j]["tweet_id"]){ ?>
                		<?php $favorite_flg = true; ?>
                	<?php } ?>
                <?php } ?>
            <?php } ?>
            <?php if($favorite_flg){ ?>
            	<br>
            <?php }else{ ?>
            	<a href="<?php echo $base_url; ?>/favorite/insert?tweet_id=<?php echo $tweetes[$j]["tweet_id"]; ?>">お気に入りに追加</a><br>
            <?php } ?>
            &emsp;<?php echo $this->escape($tweetes[$j]["body"]); ?><br>
            <a href="<?php echo $base_url; ?>/tweet/delete?tweet_id=<?php echo $tweetes[$j]["tweet_id"]; ?>">削除</a>
            <a href="<?php echo $base_url; ?>/tweet/single_tweet?tweet_id=<?php echo $tweetes[$j]["tweet_id"]; ?>"><?php echo $tweetes[$j]["created_at"]; ?></a><hr/>
    	<?php } ?>
    <?php } ?>
<?php } ?>