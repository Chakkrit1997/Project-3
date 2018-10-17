<?php
    include 'session_user.php';
    require 'mysql/connect.php';
    $bid = $_POST['bid'];
    $bide = $_POST['bide'];
    $btitle = $_POST['btitle'];
    $bauth = $_POST['bauth'];
    $bt_id = $_POST['bt_id'];
    $sql = "UPDATE books SET bid='$bide',btitle='$btitle',bauth ='$bauth', bt_id='$bt_id' WHERE bid='$bid' ";
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
        window.location.replace("show_b.php");
    }else{
        window.history.back();
    }
    </script>
    
</body>
</html>