<?php

   $d = './num';
   $aaa  = file_get_contents($d);
   echo $aaa;
   $bbb = file_put_contents($d,$aaa);
   $bbb +=1;
   echo $bbb;
//    echo file_put_contents($d,$aaa);

