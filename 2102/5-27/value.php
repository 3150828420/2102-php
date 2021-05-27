<?php

// 返回数组中的值
$arr1 = ["11","22","33"];
$arr2 = [
    "name"   => "张三",
     "age"   => "手表",
     "email" => "zhangsan@qq,com"

];

$arr11 = array_values($arr1);
$arr22 = array_values($arr2);
echo '<pre>';print_r($arr11);echo '</pre>';
echo '<pre>';print_r($arr22);echo '</pre>';
