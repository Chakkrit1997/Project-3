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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css"  id="bootstrap-css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"></script>
    <title>Borrow and Lending</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">EasySearch</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="show_b.php">จัดการข้อมูลหนังสือ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">ยืมและคืนหนังสือ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="manage_user.php">จัดการข้อมสมาชิก</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-danger" onclick="window.location.href='logout.php'" >Logout</a>
      </li>
    </ul>
  </div>
</nav>
<br/>
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
