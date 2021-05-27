<?php


$f = "./text";
$data = "HELLO PHP";
// echo file_put_contents($f,$data);
echo file_put_contents($f,$data,FILE_APPEND);