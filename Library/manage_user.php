<?php
   // include 'session_admin.php';
    require 'mysql/connect.php';
   // require 'mysql/config.php';
    $sql = "SELECT * FROM tb_login ";

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
<div class="container mt-5">
<table class="table table-bordered" >
<h2>จัดการข้อมูลสมาชิก</h2>
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
<a class="btn btn-danger" href="index.php">กลับหน้าหลัก</a> 
</div>
</body>
</html>
