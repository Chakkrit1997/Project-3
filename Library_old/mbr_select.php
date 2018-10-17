<?php
include 'session_user.php';
require 'mysql/connect.php';
$sql = "SELECT mid, mname, mdep FROM members WHERE mid='$mid'";
$result = mysqli_query($dbcon,$sql);
//echo ($sql);
$record = mysqli_fetch_array($result);
$mid   = $record[0];
$mname = $record[1];
$mdep  = $record[2];
require 'mysql/uncon.php';
?>