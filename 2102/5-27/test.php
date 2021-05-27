<?php

// echo '<pre>';print_r($_POST);echo '</pre>';
// 接收post传参
if(empty($_POST)){
    die("数据未提交");
}
$user_info = [];
// 判断字段不能为空
foreach($_POST as $k=>$v){
    $input = trim($v);
    if(empty($input)){
        die($k."字段不能为空");
    }
    $user_info[$k] = $input;
}


// 用户名
// $username = $_POST['u_name'];
$patten = "/^[a-zA-z]{5,10}$/";
if(!preg_match($patten,$user_info['u_name'])){
    die("用户名不符合规则");
}

//邮箱

if( !filter_var($user_info['u_email'],FILTER_VALIDATE_EMAIL) ){
   die("邮箱不符合规则");
}


// //  手机号必须为合法手机号
$tels = "/^1[356789]\d{9}$/";
// $tel = $_POST['u_tel'];
if(!preg_match($tels,$user_info['u_tel'])){
    die("手机号不符合规则");
}
// //  密码与确认密码必须一致，并且长度大于6
// $pass1 = $_POST['u_pass1'];
$pass1s = "/^\w{6,}$/";
if(!preg_match($pass1s,$user_info['u_pass1'])){
    die("密码格式有误");
}
// $pass2 = $_POST['u_pass2'];
if($user_info['u_pass1']!=$user_info['u_pass2']){
    die("确认密码与密码一致");
}
echo "注册成功";
?>