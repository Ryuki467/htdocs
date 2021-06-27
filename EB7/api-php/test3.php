<?php 

$base_url = "http://jws.jalan.net/APICommon/AreaSearch/V1/";

$key = "cap14ddbecad68";
$pref = "020000";

$data = compact("key","pref");
$path = http_build_query($data);
$url = $base_url . "?" . $path;

$jalan = @simplexml_load_file($url);

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>じゃらん</title>
</head>
<body>
	<div>リージョン:<?php echo $jalan->Area->Region["name"]; ?></div>
	<?php foreach($jalan->Area->Region->Prefecture as $pref){ ?>
	<div>都道府県:<?php echo $pref["name"]; ?>:<?php echo $pref["cd"]; ?></div>
		<?php foreach($pref->LargeArea as $l_area){ ?>
			<div style="margin-left: 30px";>大エリア:<?php echo $l_area["name"];?>:<?php echo $l_area["cd"];?></div>
			<?php foreach($l_area->SmallArea as $s_area){ ?>
				<div style="margin-left: 60px";>小エリア:<?php echo $s_area["name"];?>:<?php echo $s_area["cd"];?></div>
			<?php } ?><br>
		<?php } ?>
	<?php } ?>
</body>
</html>