<?php 
echo '<pre>';print_r($_POST);echo '</pre>';
$sname = trim($_POST['neme']);
$sage = trim($_POST['age']);
$sdz  = trim($_POST['dz']);
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
    <tr>
        <td>
            <?php echo $sname;?>
        </td>
        <td>
            <?php if($sage>18){echo "成年";
            }else{
                echo "未成年";
                        }
            ?>
        </td>
        <td> <?php echo $sdz; ?>  </td>
    </tr>
</tbody>
</table>