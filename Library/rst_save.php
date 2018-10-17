<?php
include 'session_user.php';
require 'mysql/connect.php';

//require 'mysql/config.php';
if(isset($_GET['login_id'])){
    $login_id = $_GET['login_id'];
}else{
    $login_id = "";
}

if(isset($_GET['bid'])){
    $bid = $_GET['bid'];
}else{
    $bid = "";

}

$sql = "SELECT DATEDIFF(NOW(),tlend) FROM transections WHERE bid='$bid'AND mid='$login_id' AND tstat='1'";
$result = mysqli_query($dbcon,$sql);
$record = mysqli_fetch_array($result);
$numday = (int)$record[0];
require 'mysql/uncon.php';

if($numday > 7){
    $tstat = 2;
}else{
    $tstat = 0;
}

require 'mysql/connect.php';
$sql ="UPDATE transections SET trest=NOW(),tstat='$tstat' WHERE bid='$bid' AND mid='$login_id' AND tstat='1' ";
$result = mysqli_query($dbcon,$sql);
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
        window.location.replace("mbr_detail.php?login_id=<?php echo($login_id);?>");
    }else{
        window.history.back();
    }
    </script>
</body>
</html>