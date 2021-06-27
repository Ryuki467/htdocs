<?php $this->setLayoutVar('title','個別つぶやき画面') ?>

<!-お気に入り、狙ったつぶやきが表示できてない->
<br>
<?php for($i=0; $i<count($tweet); $i++){?>
	<?php if($tweet_id == $tweet[$i]["tweet_id"]){?>
        <a href="<?php echo $base_url; ?>/tweet/single_index?user_id=<?php echo $tweet[$i]["user_id"]; ?>"><?php echo $this->escape($tweet[$i]["nickname"]);?></a>
        <a href="<?php echo $base_url; ?>/favorite/insert?tweet_id=<?php echo $user["user_id"]; ?>">お気に入りに追加</a><br>
        &emsp;<?php echo $this->escape($tweet[$i]["body"]); ?><br>
        <a href="<?php echo $base_url; ?>/tweet/single_tweet?tweet_id=<?php echo $tweet[$i]["tweet_id"]; ?>"><?php echo $tweet[$i]["created_at"]; ?></a><hr/>
    <?php } ?>
<?php } ?>