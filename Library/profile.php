<?php

    require 'mysql/connect.php';
    
    $session_login_id = $_SESSION['login_id'];

    $qry_user = "SELECT * FROM tb_login WHERE login_id";
    $result_user = mysqli_query($dbcon,$qry_user);
    if($result_user){
        $row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);

        $username = $row_user['login_username'];
        $email = $row_user['login_email'];
        $firstname = $row_user['firstname'];
        $lastname = $row_user['lastname'];
        $status = $row_user['login_status'];

        mysqli_free_result($result_user);
    }
    mysqli_close($dbcon);
    

?>