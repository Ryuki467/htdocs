<?php 
$year = "";
if(isset($_GET['year'])){
    $year = $_GET['year'];
}
$data = [];
switch($year){
    case"2009":
        $data[] = "前田敦子";
        $data[] = "大島優子";
        $data[] = "篠田麻里子";
        $data[] = "渡辺麻友";
        $data[] = "高橋みなみ";
        $data[] = "小嶋陽菜";
        $data[] = "坂野友美";
    break;
    case"2010":
        $data[] = "大島優子";
        $data[] = "前田敦子";
        $data[] = "篠田麻里子";
        $data[] = "坂野友美";
        $data[] = "渡辺麻友";
        $data[] = "高橋みなみ";
        $data[] = "小嶋陽菜";
    break;
    case"2011":
        $data[] = "前田敦子";
        $data[] = "大島優子";
        $data[] = "柏木由紀";
        $data[] = "篠田麻里子";
        $data[] = "渡辺麻友";
        $data[] = "小嶋陽菜";
        $data[] = "高橋みなみ";
    break;
    default:
    break;
}
echo "<ol>";
foreach($data as $item){
    echo "<li>" . $item . "</li>";
}
echo "</ol>";