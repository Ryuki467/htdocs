<?php 

$base_url = "http://jws.jalan.net/APIAdvance/HotelSearch/V1/";

$key = "cap14ddbecad68";
$o_area_id = "50092";
$o_id = "0629";

$data = compact("key","o_area_id","o_id");
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
	<div>草津のホテル</div>
	<div>件数:<?php echo $jalan->NumberOfResults; ?></div>
	<table border="1">
		<tr>
			<th>ホテルID</th><th>ホテル名</th><th>住所</th><th>画像</th><th>キャッチコピー</th><th>キャプション</th>
		</tr>
		<?php foreach($jalan->Hotel as $hotel){ ?>
		<tr>
			<td><?php echo $hotel->HotelID; ?></td>
			<td><a href="<?php echo $hotel->HotelDetailURL; ?>"><?php echo $hotel->HotelName; ?></a></td>
			<td><?php echo $hotel->HotelAddress; ?></td>
			<td><img src="<?php echo $hotel->PictureURL; ?>"></td>
			<td><?php echo $hotel->HotelCatchCopy; ?></td>
			<td><?php echo $hotel->HotelCaption; ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>