<?php


$link = new mysqli("localhost","root","root","php2102");


$login_name = trim($_POST['names']);
$login_pass = trim($_POST['pass']);
// var_dump($login_name);die;



$sql = "select * from newreg where username=".$login_name;

$stmt = mysqli_prepare($link,$sql);


$result = mysqli_stmt_execute($stmt);

if($result){
    echo "登陆成功";
}else{
    echo "登陆失败";
}



