<?php
    include 'session_user.php';
    require 'mysql/connect.php';
   // require 'mysql/config.php';
    $sql = "SELECT * FROM tb_login ";
    
    if(isset($_GET['kw'])){
        $kw=$_GET['kw'];
        $sql.=" WHERE login_id ='$kw' OR firstname LIKE '%$kw%'";
    }else{
        $kw="";
        $sql.=" WHERE login_id IS NULL";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Favicon -->
    <link rel="shortcut icon" href="#" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="src/css/bootstrap.min.css">

    <!-- Google Fonts CSS -->
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="src/css/style.css">
    <title>Borrow and Lending</title>
</head>
<body>
<div class="container mt-3">
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
<td>STATUS</td>
</tr>
<?php
    $result = mysqli_query($dbcon,$sql);
    while($record = mysqli_fetch_array($result)){
?>
<tr>
<td><a href="mbr_detail.php?login_id=<?php echo($record['login_id']); ?>"><?php echo($record[0]); ?></a></td>
<td><?php echo($record['firstname'] . " ". $record['lastname']); ?></td>
<td><?php echo($record['login_status']); ?></td>
</tr>
<?php
    }
    require 'mysql/uncon.php';
?>

</table><br/>
<a class="btn btn-danger" href="index.php">กลับหน้าหลัก</a> 
</div>
</body>
</html>
