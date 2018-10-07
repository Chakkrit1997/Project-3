<?php
    require 'mysql/connect.php';
    
    $login_username = $_REQUEST['username'];
    $login_password = $_REQUEST['password'];
    $login_email    = $_REQUEST['email'];

    $sult = 'project3rajamangalauniversityoftechnologylanna';
    $hash_login_password = hash_hmac('sha256',$login_password, $sult);

    $query = "INSERT INTO tb_login(login_username, login_password, login_email) VALUES ('$login_username', '$hash_login_password', '$login_email')";
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