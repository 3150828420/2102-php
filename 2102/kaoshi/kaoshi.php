<?php
//echo '<pre>';print_r($_POST);echo '</pre>';
$sname = trim($_POST['name']);
$sage = trim($_POST['age']);
$sdz  = trim($_POST['dz']);

$link = new mysqli("localhost","root","root","php2102");
// var_dump($link);die;
$sql = "insert into adds (`name`,`age`,`dz`) values ('{$sname}','{$sage}','{$sdz}')";
// echo $sql;die;
// 准备
$stmt = mysqli_prepare($link,$sql);
// var_dump($stmt);die;
// 执行
$result = mysqli_stmt_execute($stmt);

if($result){
    echo "注册成功";
}
$sql = "select * from adds";

$res = mysqli_query($link,$sql);

$result = mysqli_fetch_all($res,MYSQLI_ASSOC);
//var_dump($result);
?>

<table border="1">
    <thead>
    <tr>
        <td>学生姓名</td>
        <td>年龄</td>
        <td>地址</td>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach($result as $k=>$v){
        if($v['age']>18){
            $a = "成年";
        }else{
            $a = "未成年";
        }
    echo "<tr>";
    echo "<td> {$v['name']} </td>";
    echo "<td> {$a} </td>";
    echo "<td> {$v['dz']} </td>";
    echo "</tr>";


    }
?>

    </tbody>


</table>






 