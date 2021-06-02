<?php

$link = new mysqli("localhost","root","root","php2102");

$username=  trim($_POST['name']);
$email = trim($_POST['email']);
$mobile = trim($_POST['mobile']);
$age = trim($_POST['age']);
$password = trim($_POST['password']);
$passwords = trim($_POST['passwords']);

$sql = "insert into newreg (`username`,`email`,`mobile`,`age`,`password`,`passwords`) values('{$username}','{$email}','{$mobile}','{$age}','{$password}','{$passwords}')";


$stmt = mysqli_prepare($link,$sql);

$result = mysqli_stmt_execute($stmt);

if($result){
    echo "注册成功";
}else{
    echo "注册失败";
}






