<?php
    include 'session_user.php';
    require 'mysql/connect.php';
    $login_id = $_GET['login_id'];
    $sql = "DELETE FROM tb_login WHERE login_id='$login_id'";
    $result = mysqli_query($dbcon,$sql);
    if($result){
        $msg = "การลบข้อมูลสมาชิกสำเร็จ";
        $v1 = 1;
    }else{
        $msg = "การลบข้อมูลสมาชิกผิดพลาด";
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
        window.location.replace("manage_user.php");
    }else{
        window.history.back();
    }
    </script>
</body>
</html>
