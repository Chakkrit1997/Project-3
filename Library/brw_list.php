<?php
    //include 'session_user.php';
    require 'mysql/connect.php';
?>
Book Holding.<br/>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table class="table table-bordered">
    <tr>
    <td>Book ID</td>
    <td>Title</td>
    <td>Lend Date</td>
    <td>Dead Line</td>
    <td>Restore</td>
    </tr>
    <?php
    $sql = "SELECT books.bid, books.btitle ,transections.tlend, DATE_ADD(transections.tlend,INTERVAL 7 DAY)AS deadline FROM books, transections WHERE books.bid=transections.bid AND transections.mid='$login_id' AND transections.tstat='1'";
    $result = mysqli_query($dbcon,$sql);
    while($record = mysqli_fetch_array($result)){
    ?>
    <tr>
    <td><?php echo($record[0]);?></td>
    <td><?php echo($record[1]);?></td>
    <td><?php echo date_format(date_create($record[2]),"d/m/Y");?></td>
    <td><?php echo date_format(date_create($record[3]),"d/m/Y");?></td>
    <td><a class="btn btn-success" href="javascript:rstbook('<?php echo($record[0]);?>')">Restore</a></td>
    </tr>
    <?php
    }
    require 'mysql/uncon.php';
    ?>
</table>

<script language="javascript">

function rstbook(v1){
    var url = "rst_save.php?login_id=<?php echo($login_id);?>&bid=" +v1;
    if(confirm("Restore tihs book ?") == true){
        window.location.href =url;
    }

}

</script>
    
</body>
</html>

