<?php

 $arr = [111,2222,33333,444444,"a","b","c"];
 
 foreach($arr as $k=>$v){
   echo '$k= '. $k . "\n";
   
 }

//for 循环 
//获取数组长度
$length = count($arr);
for($i=0;$i<$length;$i++){
	  echo '$i= '.$i ."\n";
}
