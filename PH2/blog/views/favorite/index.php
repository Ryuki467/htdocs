<?php $this->setLayoutVar('title','お気に入り') ?>
<h2><?php echo $this->escape($user["nickname"]);?>さんのお気に入り</h2><br><?php //ログイン直後のエラー?>

<?php 
    /*
     * ログイン直後のエラー
     * ここでは、自分のつぶやきとフォロー中の人のつぶやきが表示されるようにしたい
     * もちろんフォローがきえたらつぶやきも消える
     * お気に入り機能は未完成
     * 自分以外のひとのつぶやきを見ることもできない
     */
?>

<?php if(empty($tweetes)){ ?>

<?php }else{ ?>
    <?php for($i=0; $i<count($tweetes); $i++){?>
        <?php $favorite_flg = false; ?>
        <?php for($j=0; $j<count($favorite); $j++){?>
        	<?php if($favorite[$j]["user_id"] === $user["user_id"]){?>
        		<?php if($favorite[$j]["tweet_id"] === $tweetes[$i]["tweet_id"]){?>
        			<?php $favorite_flg = true; ?>
        		<?php } ?>
        	<?php } ?>
        <?php } ?>
    	<?php if($favorite_flg){ ?>
            <a href="<?php echo $base_url; ?>/tweet/single_index?user_id=<?php echo $tweetes[$i]["user_id"]; ?>"><?php echo $this->escape($tweetes[$i]["nickname"]);?></a>
            <a href="<?php echo $base_url; ?>/favorite/delete?tweet_id=<?php echo $tweetes[$i]["tweet_id"]; ?>">お気に入り解除</a><br>
            &emsp;<?php echo $this->escape($tweetes[$i]["body"]); ?><br>
            <a href="<?php echo $base_url; ?>/tweet/single_tweet?tweet_id=<?php echo $tweetes[$i]["tweet_id"]; ?>"><?php echo $tweetes[$i]["created_at"]; ?></a><hr/>
    	<?php } ?>
    <?php } ?>
<?php } ?>