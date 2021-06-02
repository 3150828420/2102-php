<?php
if($_POST) {
    session_start();
    if (isset($_SESSION['goods_name'])) {
        header("refresh:3;url=man.php");
        echo "用户已登陆";
        die;
    }
//处理变量

    $username = trim($_POST['u_name']);
//var_dump($username);
    $mobile = trim($_POST['u_mobile']);

    $email = trim($_POST['u_email']);

    $pass1 = trim($_POST['u_pass1']);

    $pass2 = trim($_POST['u_pass2']);

    $address = trim($_POST['address']);

//注册时间
    $reg_time = time();
    $regs_time = date("Y-m-d H:i:s", $reg_time);
//echo $regs_time;die;
//年龄
    $age = intval($_POST['u_age']);
//密码
    $upass = password_hash($pass1, PASSWORD_BCRYPT);
//echo $upass;die;
//连接数据库

//var_dump($link);die;
    include "link.php";
//字符集
    mysqli_query($link, "set names utf8");

//插入sql语句
    $sql = "insert into goods (`goods_name`,`goods_mobile`,`goods_email`,`goods_pwd`,`goods_pwd1`,`goods_time`,`goods_age`,`address`)
         values ('{$username}','{$mobile}','{$email}','{$upass}','{$pass2}','{$regs_time}',   $age,'{$address}')";


    $sqls = "select * from goods where goods_name='{$username}'";
//echo $sqls;die;
    $query = mysqli_query($link, $sqls);

    $res = mysqli_fetch_all($query, MYSQLI_ASSOC);

//echo $sql;die;
    if ($res) {
        header("refresh:3;url=reg.html");
        die ("用户已存在");
    }


//echo $sql;die;

    $stmt = mysqli_prepare($link, $sql);
//var_dump($stmt);die;;
    $result = mysqli_stmt_execute($stmt);
//var_dump($result);die;
    if ($result) {
        header("refresh:3;url=login.html");
        //header("location:login.html");
        echo "注册成功";
    } else {
        echo "注册失败";
    }
    die;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="reg.php" method="post">
    <input type="text" name="u_name" placeholder="用户名"> <br>
    <input type="email" name="u_email" placeholder="Email"> <br>
    <input type="text" name="u_mobile" placeholder="手机号"> <br>
    <input type="text" name="u_age" placeholder="年龄"> <br>
    <input type="password" name="u_pass1" placeholder="密码"><br>
    <input type="password" name="u_pass2" placeholder="确认密码"><br>
    <input type="text" name="address" placeholder="地址"><br>
    <input type="reset" value="重置">
    <input type="submit" value="提交">

</form>
</body>
</html>