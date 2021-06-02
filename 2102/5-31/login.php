<?php
if($_POST) {
//开启session
    session_start();
    if (isset($_SESSION['goods_name'])) {
        header('Refresh:2;url=man.php');
        echo "用户已登录，正在跳转至个人中心1111";
//    echo "111";
        die();
    }

    $value = trim($_POST['u']);

    $upass = trim($_POST['pass']);

//连接数据库
    include "link.php";

//字符集

    mysqli_query($link, "set names utf8");

    $sql = "select * from goods where goods_name = '{$value}' or goods_email = '{$value}' or goods_mobile = '{$value}'";


    $res = mysqli_query($link, $sql);

    $result = mysqli_fetch_all($res, MYSQLI_ASSOC);



    if (empty($result)) {
        echo "查无此人";
    }

    if (password_verify($upass, $result[0]['goods_pwd'])) {

        $now = date("Y-m-d H:i:s", time());
        $uid = $result[0]['goods_id'];
        $login_time = $now;
        $login_ip = $_SERVER['REMOTE_ADDR'];
        $ua = $_SERVER['HTTP_USER_AGENT'];

        $sql = "insert into goods_login (`uid`,`login_time`,`login_ip`,`ua`) values ('{$uid}','{$login_time}','{$login_ip}','{$ua}')";

        $stmt = mysqli_prepare($link, $sql);

        $ress = mysqli_stmt_execute($stmt);

        $_SESSION['goods_name'] = $result[0]['goods_name'];
        $_SESSION['goods_email'] = $result[0]['goods_email'];
        $_SESSION['goods_age'] = $result[0]['goods_age'];

        $_SESSION['goods_time'] = $result[0]['goods_time'];
        $_SESSION['goods_id'] = $result[0]['goods_id'];

        header("refresh:1;url=man.php");
        echo "登录成功,正在跳转至个人主页2222";

    } else {
        echo "密码不正确";
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
<form action="login.php" method="post">
    <input type="text" name="u" placeholder="用户名/Email/手机号"> <br>
    <input type="password" name="pass" placeholder="密码"><br>
    <input type="submit" value="登录">
</form>
</body>
</html>


