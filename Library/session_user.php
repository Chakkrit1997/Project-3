<?php
    session_start();
    if (!isset($_SESSION['login_id'])){
        
        header("Location: form.php");
    }
    require 'mysql/connect.php';
    
    $session_login_id = $_SESSION['login_id'];

    $qry_user = "SELECT * FROM tb_login WHERE login_id='$session_login_id'";
    $result_user = mysqli_query($dbcon,$qry_user);
    if($result_user){
        $row_user = mysqli_fetch_array($result_user);
        $s_login_username = $row_user['login_username'];
        $s_login_firstname = $row_user['firstname'];
        $s_login_lastname = $row_user['lastname'];
        $s_login_email = $row_user['login_email'];
        $s_login_status = $row_user['login_status'];
        $s_login_password = $row_user['login_password'];
        mysqli_free_result($result_user);
    }
    mysqli_close($dbcon);

?>