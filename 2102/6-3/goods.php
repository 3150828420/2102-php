<?php
$aa = trim($_GET['goods_id']);

$link = new mysqli("localhost","root","root","goods");

$sql = "select goods_name,shop_price,add_time,click_count from p_goods where goods_id='{$aa}'";

$res = mysqli_query($link,$sql);

$result = mysqli_fetch_all($res,MYSQLI_ASSOC);

//echo '<pre>';print_r($result);echo '</pre>';
//$f = './num.php';
foreach ($result as $k=>$v){
    echo "商品id：".$aa;
    echo "<br>";
    echo "商品名：".$v['goods_name'];
    echo "<br>";
    echo "商品价格：".$v['shop_price'];
    echo "<br>";
    echo "上架时间：".$v['add_time'];
    echo "<br>";
//    $number = file_get_contents($f);
    $number = $v['click_count'];
//    echo $number;
//    file_put_contents($number);
    echo "浏览量：".$number;
}


