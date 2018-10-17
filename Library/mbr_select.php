<?php
include 'session_user.php';
require 'mysql/connect.php';
$sql = "SELECT login_id, firstname, login_status FROM tb_login WHERE login_id='$login_id'";
$result = mysqli_query($dbcon,$sql);
//echo ($sql);
$record = mysqli_fetch_array($result);
$login_id   = $record[0];
$firstname = $record[1];
$login_status  = $record[2];
require 'mysql/uncon.php';
?>