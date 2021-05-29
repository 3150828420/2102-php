<?php


$link = new mysqli("localhost","root","root","php2102");

$goods_name = trim($_POST['name']);
$goods_price = trim($_POST['price']);
$goods_time = trim($_POST['time']);
$goods_num = trim($_POST['num']);
$goods_cz = trim($_POST['cz']);

$sql = "insert into goods (`goods_name`,`goods_price`,`goods_time`,`goods_num`,`goods_cz`) values ('{$goods_name}','{$goods_price}','{$goods_time}','{$goods_num}','{$goods_cz}')";
// echo $sql;

// 准备阶段
$stmt = mysqli_prepare($link,$sql);


// 执行阶段
$result = mysqli_stmt_execute($stmt);


if($result){
    echo "提交成功";
}else{
    echo "提价失败";
}




