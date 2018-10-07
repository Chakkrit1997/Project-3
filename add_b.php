<?php
$bid =$_POST['bid'];
$btitle =$_POST['btitle'];
$bauth =$_POST['bauth'];
$bt_id =$_POST['bt_id'];
$sql="INSERT INTO books (bid,btitle,bauth,bt_id,bdateadd) VALUE ('$bid','$btitle','$bauth','$bt_id',NOW())";
require ('mysql/connect.php');
$v1= 0 ;
if($result){
    $msg = "การเพิ่มหนังสือสำเร็จ";
    $v1 = 1;
}else{
    $msg = "การเพิ่มหนังสือผิดพลาด";
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
