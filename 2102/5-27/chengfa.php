<?php
 echo '<p border=10px;>乘法表</p>';
echo '<table  width="800" heigh="200" border="1">';
// 乘法口诀表
for($i=1;$i<=9;$i++){   
    echo '<tr>';
        for ($j=1;$j<=$i;$j++){
            echo '<td>'.$j.'*'.$i.'='.$i*$j.'</td>';
        }

   echo '<tr>';

}
echo '</table>';

