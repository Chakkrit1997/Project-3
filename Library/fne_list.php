<?php
require 'mysql/connect.php';
?>

Fine.<br/>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table class="table table-bordered" >
<tr>
    <td>Book ID</td>
    <td>Title</td>
    <td>Lend Date</td>
    <td>Dead Line</td>
    <td>Restore Date</td>
    <td>Late</td>
    <td>Fine</td>
    <td>Keep</td>
</tr>
<?php
 $sql = "SELECT books.bid, books.btitle, transections.tlend, DATE_ADD(transections.tlend,INTERVAL 7 DAY) AS deadline, transections.trest, DATEDIFF(transections.trest,transections.tlend) - 7 AS late FROM books, transections WHERE books.bid=transections.bid AND transections.mid='$login_id' AND transections.tstat='2' ";
 $result = mysqli_query($dbcon,$sql);
 while($record = mysqli_fetch_array($result)){
?>
   <tr>
    <td><?php echo($record[0]);?></td>
    <td><?php echo($record[1]);?></td>
    <td><?php echo date_format(date_create($record[2]),"d/m/Y");?></td>
    <td><?php echo date_format(date_create($record[3]),"d/m/Y");?></td>
    <td><?php echo date_format(date_create($record[4]),"d/m/Y");?></td>
    <td><?php echo($record[5]);?></td>
    <td><?php echo((int)$record[5] * 2 );?></td>
    <td><a class="btn btn-success" href="javascript:fnekeep('<?php echo($record[0]);?>','<?php echo($record[2]);?>')">Keep</a></td>
    </tr>
<?php
    }
    require 'mysql/uncon.php';
    ?>
</table>
<script language="javascript">

function fnekeep(v1,v2){
    var url = "fne_keep.php?login_id=<?php echo($login_id);?>&bid=" +v1 + "&tlend=" +v2;
    if(confirm("Keep this transections fine ?") == true){
        window.location.href =url;
    }

}

</script>
    
</body>
</html>
