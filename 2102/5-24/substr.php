<?php
  //字符串截取
  $sub = "abcdef";
  echo substr($sub,0,3);
  //字符串哈希值
  $md = "123456";
  echo "\n";
  echo md5($md);
  //字符串去空格
  $trim = "  hello word  ";
  echo "\n";
  echo trim($trim);
  //去右边空格
  echo "\n";
  echo rtrim($trim);
  //有左空格
  echo "\n";
  echo ltrim($trim);
  //字符串转大小写
  $write = "hello word";
  //字符串首字母转大写
  echo "\n";
  echo ucfirst($write);
  //字符串每个单词首字母转大写
  echo "\n";
  echo ucwords($write);
  //所有字母转大写
  echo "\n";
  echo strtoupper($write);
  //所有字母转小写
  echo "\n";
  echo strtolower($write);
  //打乱字符串；
  echo "\n";
  echo str_shuffle($write);
  //将字符串转为数组；
  echo "\n";
  echo str_split($write);
  //获取字符串的长度
  echo "\n";
  echo strlen($write);
  //查找字符串首次出现的位置
  echo "\n";
  echo strpos($sub);
  //反转字符串
  echo "\n";
  echo strrev($write);
