<?php
    //include 'session_user.php';
    require 'mysql/connect.php';
    $sql="SELECT * FROM books INNER JOIN booktype ON books.bt_id = booktype.bt_id ";
    $result = mysqli_query($dbcon,$sql);

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
    <title>การจัดการข้อมูลหนังสือ</title>
   <!-- <style>
        table,th,td{
            border: 1px solid black;
            border-collapse: collapse;
        }!-->
    </style>
</head>
<body>

<br/>
<div class="container">
<a class="btn btn-info" href="add_bform.php">เพิ่มหนังสือ</a>
<a class="btn btn-danger" href="index.php">กลับหน้าหลัก</a>

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
</div>
    </div>
    <br/>
</div>
</body>
</html>