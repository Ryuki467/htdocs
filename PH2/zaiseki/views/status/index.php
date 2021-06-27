<?php $this->setLayoutVar('title','ホーム') ?>
<h2>在席情報一覧</h2>

<?php if(!empty($message)): ?>
<div id="message"><?php echo $message; ?></div>
<?php endif; ?>
<?php if($urgent_flg){ ?>
	<div id="urgent">緊急の伝言メモがあります</div>
<?php } ?>
<div>
    <a href="<?php echo $base_url; ?>/status/update">離席メモを更新する</a>
    <a href="<?php echo $base_url; ?>/message/index">伝言メモを確認する</a>
    <a href="<?php echo $base_url; ?>/message/send">送信済み伝言メモ</a>
</div>
<table>
<tr>
	<th>伝言を残す</th>
	<th>名前</th>
	<th>状況</th>
	<th>行先</th>
	<th>帰りの予定</th>
	<th>メモ</th>
	<th>最終更新時間</th>
</tr>
<?php foreach($statuses as $status): ?>
<?php 
    $name = empty($status["name"])?"名無しさん" : $status["name"];
    $modified_at = empty($status["modified_at"]) ? "未設定" : date("Y年m月d日　H時i分",strtotime($status["modified_at"]));
    $present = !isset($status["present"]) ? "" :$present_list[$status["present"]];
?>
<tr>
	<td><a href="<?php echo $base_url; ?>/message/add?to_user_id=<?php echo $status["id"]; ?>">伝言</a></td>
	<td><?php echo $this->escape($name); ?></td>
	<td><?php echo $this->escape($present); ?></td>
	<td><?php echo $this->escape($status["destination"]); ?></td>
	<td><?php echo $this->escape($status["reach_time"]); ?></td>
	<td><?php echo $this->escape($status["memo"]); ?></td>
	<td><?php echo $modified_at; ?></td>
</tr>
	<?php endforeach; ?>
</table>
<div>
	<a href="<?php echo $base_url; ?>/message/add">全てのユーザーに伝言メモを作成する</a>
</div>