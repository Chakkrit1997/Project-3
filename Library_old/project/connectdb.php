<?php
    $dbcon = mysqli_connect("localhost", "root", "", "project-3");

    if (mysqli_connect_errno()){
        echo "Error ".mysqli_connect_error();
    }
    mysqli_set_charset($dbcon,'utf-8');
?>