<?php

echo '<pre>';print_r($_POST);echo '</pre>';
// 用户名
$username = $_POST['u_name'];
$patten = "/^[a-zA-z]{5,10}$/";
if(!preg_match($patten,$username)){
    echo "用户名不符合规则";
    echo "<br>";
}
//  手机号必须为合法手机号
$tels = "/^1[356789]\d{9}$/";
$tel = $_POST['u_tel'];
if(!preg_match($tels,$tel)){
    echo "手机号不符合规则";
    echo "<br>";
}
//  密码与确认密码必须一致，并且长度大于6
$pass1 = $_POST['u_pass1'];
$pass1s = "/^\w{6,}$/";
if(!preg_match($pass1s,$pass1)){
    echo "密码不符合规则";
    echo "<br>";
}
$pass2 = $_POST['u_pass2'];
if($pass1!=$pass2){
    echo "密码与确认密码不一致";
    echo "<br>";
}


