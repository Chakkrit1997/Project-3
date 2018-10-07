<?php
require 'config.php';
$dbcon = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die("ไม่สามารถติดต่อฐานข้อมูลได้" .mysqli_error());
mysqli_set_charset($dbcon,'utf8');
$result = mysqli_query($dbcon,$sql);
//echo "ติดต่อสำเร็จ";
?>