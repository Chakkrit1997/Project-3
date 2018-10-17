<?php
    require 'mysql/connect.php';
    
    $login_username  = $_REQUEST['username'];
    $login_password  = $_REQUEST['password'];
    $login_email     = $_REQUEST['email'];
    $login_firstname = $_REQUEST['firstname'];
    $login_lastname  = $_REQUEST['lastname'];

    $sult = 'project3rajamangalauniversityoftechnologylanna';
    $hash_login_password = hash_hmac('sha256',$login_password, $sult);

    $query = "INSERT INTO tb_login(login_username, login_password, login_email , firstname, lastname) VALUES ('$login_username', '$hash_login_password', '$login_email', '$login_firstname', '$login_lastname')";
    $result = mysqli_query($dbcon,$query);

    if($result){
        echo "<script type='text/javascript'>";
	    echo "alert('Register Succesfuly.');";
	    echo "window.location = 'form.php'; ";
	    echo "</script>";
        //header("Location: form.php");
    } else{
        echo "Register Fail." . mysqli_error($dbcon);
    }
    
    mysqli_close($dbcon);
?>