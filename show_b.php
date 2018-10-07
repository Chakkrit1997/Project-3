<?php
    include 'session_user.php';
    require 'mysql/connect.php';
    $sql="SELECT * FROM books INNER JOIN booktype ON books.bt_id = booktype.bt_id ";
    $result = mysqli_query($dbcon,$sql);

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
    <title>การจัดการข้อมูลหนังสือ</title>
   <!-- <style>
        table,th,td{
            border: 1px solid black;
            border-collapse: collapse;
        }!-->
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
    <table class="table">
    <thead class="table-active">
    <tr>
        <th>รหัสหนังสือ</th>
        <th>ชื่อหนังสือ</th>
        <th>ชื่อผู้เขียนหนังสือ</th>
        <th>หมวดหมู่</th>
        <th>เวลาการเพิ่ม</th>
        <th>แก้ไขข้อมูล</th>
        <th>ลบข้อมูล</th>
    </tr>
    </thead>
    <?php

        while ($row = mysqli_fetch_array($result)) {

    ?>
    <tr>
        <td><?php echo $row[0]; ?></td>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row['bt_name']; ?></td>
        <td><?php echo $row[4]; ?></td>
        <td><a  class="btn btn-info" href="edit_bform.php?bid=<?php echo $row[0]; ?>">แก้ไข</a></td>
        <td><a  class="btn btn-danger" href="del_b.php?bid=<?php echo $row[0]; ?>">ลบ</a></td>
    </tr>
    <?php
        }
        require 'mysql/uncon.php';
    ?>
</table>
       
<a class="btn btn-info" href="add_bform.php">เพิ่มหนังสือ</a>
<a class="btn btn-danger" href="index.php">กลับหน้าหลัก</a>
</div>
    </div>
</div>
</body>
</html>