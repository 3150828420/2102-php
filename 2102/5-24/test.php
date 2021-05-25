<?php
   //时间串  
  //echo time();
  //echo "\n";
  //路径
  //echo __FILE__;
  //echo "\n";
  
  echo __LINE__;  
  
  //定义函数
  function add($num1,$num2){
	  return $num1 + $num2;  
	  
	  
  }
  //定义变量
  $a = 500;
  $b = 20;	
  $c = add($a,$b);
 //双引号解析变量 单引号原样输出
  echo "$a + $b = $c";
  echo "\n";
  //字符串拼接使用.
  echo '$a +$b =' .$c;  