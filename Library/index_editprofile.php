<?php
    include 'session_user.php';
    require 'mysql/connect.php';

    $login_firstname = $_REQUEST['firstname'];
    $login_lastname  = $_REQUEST['lastname'];
    $login_email     = $_REQUEST['email'];

    $query = "UPDATE tb_login SET firstname='$login_firstname', lastname='$login_lastname', login_email='$login_email'  WHERE login_id='$session_login_id' ";
    $result = mysqli_query($dbcon,$query);

    if($result){
        echo "<script type='text/javascript'>";
	    echo "alert('แก้ไขข้อมูลเสร็จแล้ว');";
	    echo "window.location = 'index2.php'; ";
	    echo "</script>";
        //header("Location: form.php");
    } else{
        echo "ไม่สามารถแก้ไข ข้อมูลได้." . mysqli_error($dbcon);
    }
    
    mysqli_close($dbcon);
?>