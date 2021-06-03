<?php
session_start();
    unset($_SESSION['goods_name']);

    unset($_SESSION['goods_email']);

    unset($_SESSION['goods_age']);
    //销毁session4
    //session_destroy();
    header("refresh:3;url=login.php");
    echo "退出登录成功,正在跳转至登录页面";
