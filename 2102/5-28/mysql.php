<?php

   // 创建链接
   // $link = new mysqli("localhost","root","root","php2102");
   // // sql语句
   // $sql = "select * from goods";
   // // 执行
   // $res = mysqli_query($link,$sql);
   // // 获取
   // $rows = mysqli_fetch_all($res,MYSQLI_ASSOC);
   // echo '<pre>';print_r($rows);echo '</pre>';


    // 创建连接
    // $link = new mysqli("localhost", "root", "root", "php2102");
    // $account = mt_rand(0,100000);
    //构造sql语句
    // $sql = "insert into goods (`goods_name`,`goods_price`,`goods_time`,`goods_num`,`goods_cz`) values ('zhangsan','8888888','21:30','99999999',1)";
    //准备执行sql语句
    // $stmt = mysqli_prepare($link,$sql);
    //执行sql
    // $stmt->execute();
    // echo '<pre>';print_r($stmt);echo '</pre>';
    //检查sql执行情况
    // $affect_rows = $stmt->affected_rows;
    // echo "影响的行数: ". $affect_rows;echo '</br>';


$link = new mysqli("localhost","root","root","php2102");
 // $goods_id = intval($_GET['id']);
// $goods_name = trim($_GET['name']);
// $goods_price = intval($_GET['price']);    
// $goods_num = intval($_GET['num']);
// var_dump($link);
// $sql = "select * from goods where goods_id=".$goods_id;
// $sql = "select * from goods where goods_name='{$goods_name}'";
// $sql = "select * from goods where goods_price=".$goods_price;
// $sql = "select * from goods where goods_num=".$goods_num;
$sql = "delete from goods where goods_name='zhangsan'";
$res = mysqli_query($link,$sql);
// var_dump($res);
$row = mysqli_fetch_all($res,MYSQLI_ASSOC);
echo '<pre>';print_r($row);echo '</pre>';

