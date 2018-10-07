<?php
   // require 'mysql/config.php';
    $sql = "SELECT mid, mname, mdep FROM members ";
    if(isset($_GET['kw'])){
        $kw=$_GET['kw'];
        $sql.=" WHERE mid='$kw' OR mname LIKE '%$kw%'";
    }else{
        $kw="";
        $sql.=" WHERE mid IS NULL";
    }
    require 'mysql/connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <title>Borrow and Lending</title>
</head>
<body>
<div class="container">
    <div class="col-xs-12">
    <form action="mbr_list.php" method="get" target="_self">   
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Search :</label>
        <div class="col-sm-8">
            <input class="form-control" name="kw" type="text" id="kw" value="<?php echo($kw);?>">   
        </div>
        <div class="col-sm-2">
            <input class="btn btn-primary" name="submit" type="submit" value="OK">
        </div>
    </div>
       
</form><br/>
</div>
<table class="table table-bordered" >
<tr>
<td>ID</td>
<td>NAME</td>
<td>DEPARTMENT</td>
</tr>
<?php
    while($record = mysqli_fetch_array($result)){
?>
<tr>
<td><a href="mbr_detail.php?mid=<?php echo($record[0]); ?>"><?php echo($record[0]); ?></a></td>
<td><?php echo($record[1]); ?></td>
<td><?php echo($record[2]); ?></td>
</tr>
<?php
    }
?>

</table><br/>
<a class="btn btn-danger" href="index.php">กลับหน้าหลัก</a> 
</div>
</body>
</html>
