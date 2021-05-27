<?php

//  array_rand()		//随机取出一个或多个key
$arr = [
    "王志献",
    "袁佳莹",
    "陈寒雪",
    "高重阳",
    "jk",
    "黑丝"

];
// echo '<pre>';print_r($arr);echo '</pre>';
$k  = array_rand($arr,1);
// echo '<pre>';print_r($k);echo '</pre>';
// echo '<pre>';print_r($arr);echo '</pre>';
echo $arr[$k];

