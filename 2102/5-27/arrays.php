<?php

$arr1 = [
    "name"  => " zhangsan ",
    "age"   => 11,
    "email" => "zhangsan@qq.com"
];
echo "<pre>";print_r($arr1);echo '</pre>';
//使用 foreach 生成一个新数组， 数组元素与 $arr1一致
$new_array = [];
foreach($arr1 as $k=>$v){
    $new_array[$k] = $v;    
}
echo "<pre>";print_r($new_array);echo '</pre>';
                        

