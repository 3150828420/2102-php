<?php
// echo "123";die;
$link = new mysqli("localhost","root","root","php2102");

$goods_name = trim($_POST['names']);

// $goods_price = trim($_POST['prices']);

$sql = "select  * from  goods  where goods_name='{$goods_name}'";
// echo $sql;die;
// 准备阶段
$stmt =  mysqli_prepare($link,$sql);
// var_dump($stmt);die;
// 执行阶段
$result = mysqli_stmt_execute($stmt);

if($result=true){
  echo "登陆成功";
}else{
    echo "登陆失败";
}






