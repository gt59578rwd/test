<?php
// *  開放給全部的人下載
header("Access-control-Allow-Origin:*");
// file_get_contents PHP 內建 取得資料的語法
$mydata = file_get_contents('https://media.taiwan.net.tw/XMLReleaseALL_public/hotel_C_f.json');
echo $mydata;
?>
