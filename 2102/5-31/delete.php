<?php
$goods_id = $_GET['id'];
echo $goods_id;

include "link.php";

$sql = "delete from goods_login where id='$goods_id'";
//准备阶段
$stmt = mysqli_prepare($link,$sql);
//执行阶段
$res = mysqli_stmt_execute($stmt);
if($stmt->affected_rows>0){
    echo "删除成功";
    header("refresh:3,url=./man.php");
}else{
    echo "删除失败";
    header("refresh:3,url=./man.php");
}
