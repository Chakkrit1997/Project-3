<?php
   // include 'session_admin.php';
    require 'mysql/connect.php';
   // require 'mysql/config.php';
    $sql = "SELECT * FROM tb_login ";

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
        <a class="nav-link" href="mbr_list.php">ยืมและคืนหนังสือ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="manage_user.php">จัดการข้อมสมาชิก</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-danger" onclick="window.location.href='logout.php'" >Logout</a>
      </li>
    </ul>
  </div>
</nav>
<br/>
<div class="container">
<table class="table table-bordered" >
<tr>
<td>ID</td>
<td>Username</td>
<td>E-mail</td>
<td>Status</td>
<td>Date</td>
<td>แก้ไข</td>
<td>ลบ</td>
</tr>
<?php
    $result = mysqli_query($dbcon,$sql);
    while($record = mysqli_fetch_array($result)){
?>
<tr>
<td><?php echo($record[0]); ?></td>
<td><?php echo($record[1]); ?></td>
<td><?php echo($record[3]); ?></td>
<td><?php echo($record[4]); ?></td>
<td><?php echo($record[5]); ?></td>

<td><a  class="btn btn-info" href="edit_formmb.php?login_id=<?php echo $record[0]; ?>">แก้ไข</a></td>
<td><a  class="btn btn-danger" href="del_mb.php?login_id=<?php echo $record[0]; ?>">ลบ</a></td>
</tr>

<?php
    }
    require 'mysql/uncon.php';
?>

</table><br/>
<a class="btn btn-danger" href="manage_user.php">กลับหน้าหลัก</a> 
</div>
</body>
</html>
