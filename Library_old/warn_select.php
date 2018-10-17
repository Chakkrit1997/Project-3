<?php
    include 'session_user.php';
    require 'mysql/connect.php';
    $output='';
    $id=$_POST['id'];
    //echo $id;
    $sql = "SELECT * FROM transections WHERE mid ='$id' AND tstat='1'";
    $result = mysqli_query($dbcon,$sql);
    $output.='<div class="table table-responsive"><table class="table table-bordered">';
    while($warn = mysqli_fetch_array($result)){
        $output.='
        <tr>
            <td width="30%" ><label>Name</label></td></tr>
            <td width="70%" ><label>'.$warn["mid"].'</label></td></tr>
            
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