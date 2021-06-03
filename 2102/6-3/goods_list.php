<?php

$link = new mysqli("localhost","root","root","goods");

$sql = "select * from p_goods  order by add_time desc limit 10;";

//echo $sql;

$stmt = mysqli_query($link,$sql);

$res = mysqli_fetch_all($stmt,MYSQLI_ASSOC);

//echo '<pre>';print_r($res);echo '</pre>';die;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<ul>
    <?php foreach($res as $k=>$v){ ?>
    <li><a href="./goods.php?goods_id=<?php echo $v['goods_id'] ?>"><?php echo $v['goods_name'] ?></a></li>
   <?php } ?>

</ul>
</body>
</html>






