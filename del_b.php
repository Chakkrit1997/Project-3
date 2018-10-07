<?php
    include 'session_user.php';
    require 'mysql/connect.php';
    $bid = $_GET['bid'];
    $sql = "DELETE FROM books WHERE bid='$bid'";
    $result = mysqli_query($dbcon,$sql);
    if($result){
        $msg = "การลบหนังสือเสร็จสิ้น";
        $v1 = 1;
    }else{
        $msg = "การลบหนังสือผิดพลาด";
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
        window.location.replace("show_b.php");
    }else{
        window.history.back();
    }
    </script>
</body>
</html>
