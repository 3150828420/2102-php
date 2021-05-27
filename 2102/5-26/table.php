<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="5px">
<thead>
<th>姓名</th>
<th>年龄</th>
<th>Email</th>
</thead>
    <?php 
    $list = [
        ["name"=>"张三","age"=>11,"email"=>"zhangsan@qq.com"],
        ["name"=>"李四","age"=>22,"email"=>"lisi@qq.com"],
        ["name"=>"王五","age"=>33,"email"=>"wangwu@qq.com"],
        ["name"=>"赵六","age"=>44,"email"=>"zhaoliu@qq.com"],
    ];
  
//    foreach($list as $k=>$v){
//        echo "<tr>"."<td>".$v['name']."</td>"."<td>".$v['age']."</td>"."<td>".$v['email']."</td>"."</tr>";
//    }
    $length = count($list);
   for($i=0;$i<$length;$i++){
       
   }


?>
    
    
    
    
    </table>
</body>
</html>