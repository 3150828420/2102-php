<?php
session_start();
$goods_name = $_SESSION['goods_name'];
echo '<pre>';print_r($_SESSION);echo '</pre>';
echo "你好{$goods_name},欢迎回来";