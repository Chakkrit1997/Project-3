<?php
    include 'session_user.php';
    require 'mysql/connect.php';
    $output='';
    $id=$_POST['id'];
    //echo $id;
    $sql = "SELECT *,DATE_ADD(transections.tlend,INTERVAL 7 DAY)AS deadline FROM transections INNER JOIN books ON transections.bid = books.bid WHERE transections.mid='$id' AND transections.tstat='1'";
    $result = mysqli_query($dbcon,$sql);
    $output.='<p>ยินดีต้อนรับคุณสู่ห้องสมุดRMUTL</p><div class="table table-responsive"><table class="table table-bordered"> <tr>
    <td width="30%" ><label>รายการหนังสือที่ยืม</label></td><td width="30%" ><label>วันที่ครบกำหนด</label></td></tr>';
    while($warn = mysqli_fetch_array($result)){
        $output.='
            <td width="70%" ><label>'.$warn["btitle"].'</label></td><td width="70%" ><label>'.$warn["deadline"].'</label></td></tr>
            
            ';
    }
    $output.='</table></div>';
    echo $output;    
   /* $output='';
    $id = $_POST['id'];
    $sql = "SELECT * FROM transections WHERE mid='$id' ";
    require 'mysql/connect.php';
    $output .='<div class="table table-responsive">
    <table class="table table-bordered">';
    whlie($row = mysqli_fetch_array($result)) {
        $output.='
        <tr>
            <td width="30%" ><label>Name</label></td></tr>
            <td width="70%" ><label>.$row[mid]</label></td></tr>
            
            ';
    }
    $output.='</table></div>';
    echo $output;
    }*/
    require 'mysql/uncon.php';
?>