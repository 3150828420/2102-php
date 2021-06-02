<h1>个人中心</h1>
<?php
session_start();



    //判断session中是否用用户信息  如果用户为登录2跳转至登录页面
   if(!isset($_SESSION['goods_name'])){
       header("refresh:1;url=login.html");
       echo "您未登录，请先登录";
       die();
   }

    $goods_name = $_SESSION['goods_name'];
    $goods_email = $_SESSION['goods_email'];
    $goods_age = $_SESSION['goods_age'];
    $goods_time = $_SESSION['goods_time'];
    $uid = $_SESSION['goods_id'];
    echo "你好：{$goods_name},欢迎回来 <br/>";
    echo "姓名：{$goods_name}<br/>";
    echo "Email：{$goods_email}<br/>";
    echo "年领：{$goods_age}<br/>";
    echo "登陆时间:".$goods_time;



?>
<hr>
<a href="./ulogin.php">退出登录</a>
<hr>
<?php
include "link.php";

$sql = "select * from goods_login where uid = '{$uid}'";

$user = mysqli_query($link,$sql);

$users = mysqli_fetch_all($user,MYSQLI_ASSOC);
//var_dump($users);

//var_dump($a);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            margin-left: 600px;
            text-align: center;
        }
        h1{
            margin-left: 670px;
        }
    </style>
</head>
<body>
<h1>登录记录</h1>
<table border="1" cellspacing='1'>
    <thead>
    <tr>
        <td>Uid</td>
        <td>登录时间</td>
        <td>登录地址</td>
                <td>操作</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $k=>$v){ ?>
     <tr>
         <td><?php echo $v['id'] ?></td>
         <td><?php echo $v['login_time'] ?></td>
         <td><?php echo $v['login_ip'] ?></td>
         <td><a href="./delete.php?id=<?php echo $v['id'] ?>">删除</a></td>
     </tr>
    <?php  }?>

    </tbody>

</table>

</body>
</html>
<!-- foreach ($users as $k=>$v){-->
<!--echo "<tr>";-->
<!--    echo "<td>";-->
<!--        echo "{$uid}";-->
<!--        echo "</td>";-->
<!--    echo "<td>";-->
<!--        echo   $v['login_time'];-->
<!--        echo "</td>";-->
<!--    echo "<td>";-->
<!--        echo $users[$k]['login_ip'];-->
<!--        echo "</td>";-->
<!--    echo "<td>";-->
<!--        echo '<a href="./delete.php?id=--><?php //echo $v['uid'] ?><!--">删除</a>';*/-->
<!--        echo "</td>";-->
<!---->
<!--    }-->
