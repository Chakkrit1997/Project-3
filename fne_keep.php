<?php

require 'mysql/config.php';
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

if(isset($_GET['tlend'])){
    $tlend = $_GET['tlend'];
}else{
    $tlend = "";
}

$sql = "UPDATE transections SET tstat='0' WHERE bid='$bid' AND mid='$mid' AND tlend='$tlend' " ;
require 'mysql/connect.php';
if($result){
    $msg = "การชำระค่าปรับเสร็จสิ้น";
    $v1 = 1;
}else{
    $msg = "กาชำระค่าปรับผิดพลาด";
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
    <title>การชำระค่าปรับ</title>
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