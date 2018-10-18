<?php
    include 'session_user.php';
    require 'mysql/connect.php';
    $login_id = $_POST['login_id'];
    $login_ide = $_POST['login_ide'];
    $login_username = $_POST['login_username'];
    $login_password =$_POST['login_password'];
    $login_email = $_POST['login_email'];
    $sql = "UPDATE tb_login SET login_id ='$login_ide' ,login_username='$login_username' ,login_password ='$login_password' , login_email='$login_email' WHERE login_id = '$login_id' ";
    $result = mysqli_query($dbcon,$sql);
    
    $v1= 0 ;
    if($result){
        $msg = "การแก้ไขข้อมูลสำเร็จ";
        $v1 = 1;
    }else{
        $msg = "การแก้ไขข้อมูลผิดพลาด";
        $v1 = 0;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<script language="javascript">
    var v1=<?php echo($v1); ?>;
    alert('<?php echo($msg); ?>');
    if( v1 == 1 ){
        window.location.replace("index.php");
    }else{
        window.history.back();
    }
    </script>
    
</body>
</html>