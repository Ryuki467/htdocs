<?php

//ローディング画像確認のために一時待機
sleep(3);

$movies = [];
$movies[] = "lkHlnWFnA0c";
$movies[] = "WdhMjzfg6-k";
$movies[] = "oL0waWXWqaI";
$movies[] = "dFf4AgBNR1E";

$movie = "";
if(isset($_POST['movie'])){
    $movie = $_POST['movie'];
}

$youtube = "";
if($movie !== "" && array_key_exists($movie,$movies)){
    $v = $movies[$movie];
    $youtube = "<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/{$v}?autoplay=1\" frameborder=\"0\"><iframe>";
}
echo $youtube;