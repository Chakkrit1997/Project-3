<?php
require 'connectdb.php';

if(isset($_POST['username'])){
    
    $name=$_POST['username'];

    $query="SELECT * FROM tb_login WHERE login_username='$name'";
    $result=mysqli_query($dbcon,$query);

    if($result->num_rows>0)
    {
    echo "User Name Already Exist";
    }
    else
    {
    echo "Available";
    }
    exit();
}


?>