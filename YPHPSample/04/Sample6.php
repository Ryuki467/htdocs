<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php $num = 10; ?>
ようこそ<br/>
<hr/>

<?php if($num <= 0): ?>
在庫切れです。<br/>

<?php elseif($num <= 3): ?>
在庫僅少です。<br/>

<?php else: ?>
在庫があります。<br/>

<?php endif; ?>

<hr/>
ごゆっくりお過ごしください。<br/>

</body>
</html>