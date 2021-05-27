<?php 

// function str_rand($length=8){

// $str0 = "ABCDEFGHIJKMNPQRSTYVWXYZabcdefghijkmnpqrstuvwxyz23456789";
// $str = "";
// for($i=0;$i<$length;$i++){
//    $num = mt_rand(0,55);
//    echo "生成随机数：".$num;echo "<br>";
//    $c = $str0[$num];
//    echo "生成随机字母：".$str0[$num];echo "<br>";
//    $str .= $c;
// }
// return $str;
// }


// var_dump(str_rand());
function str_rand($length=8){
    $str0 = "ABCDEFGHIJKMNPQRSTYVWXYZabcdefghijkmnpqrstuvwxyz23456789";
    $str = "";
    for($i=0;$i<$length;$i++){
        $num = mt_rand(0,55);
        echo "生成随机数：".$num;echo "<br>";

    //   echo "生成随机字母：".$str0[$num];echo "<br>";
      $str .= $str0[$num];;
    }
   return $str;
}
var_dump(str_rand());




