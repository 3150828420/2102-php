<?php


$link = new mysqli("localhost","root","root","php2102");

$name = trim($_POST['name']);
$age = trim($_POST['age']);
//$goods_time = trim($_POST['time']);
$tel = trim($_POST['tel']);
$address = trim($_POST['address']);

$sql = "insert into play (`name`,`age`,`tel`,`address`) values ('{$name}','{$age}','{$tel}','{$address}')";
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




