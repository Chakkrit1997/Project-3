<?php

//require 'mysql/config.php';
if(isset($_GET['mid'])){
    $mid = $_GET['mid'];
}else{
    $mid = "";
}

if(isset($_GET['bid'])){
    $bid = $_GET['bid'];
}else{
    $bid = "";

}

$sql = "SELECT DATEDIFF(NOW(),tlend) FROM transections WHERE bid='$bid'AND mid='$mid' AND tstat='1'";
require 'mysql/connect.php';
$record = mysqli_fetch_array($result);
$numday = (int)$record[0];
require 'mysql/uncon.php';

if($numday > 7){
    $tstat = 2;
}else{
    $tstat = 0;
}

$sql ="UPDATE transections SET trest=NOW(),tstat='$tstat' WHERE bid='$bid' AND mid='$mid' AND tstat='1' ";
require 'mysql/connect.php';
if($result){
    $msg = "การส่งคืนเสร็จสิ้น";
    $v1 = 1;
}else{
    $msg = "การส่งคืนใหม่ผิดพลาด";
    $v1 = 0;
}
require 'mysql/uncon.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>การส่งคืน</title>
</head>
<body>
<script language="javascript">
    var v1=<?php echo($v1); ?>;
    alert('<?php echo($msg); ?>');
    if( v1 == 1 ){
        window.location.replace("mbr_detail.php?mid=<?php echo($mid);?>");
    }else{
        window.history.back();
    }
    </script>
</body>
</html>