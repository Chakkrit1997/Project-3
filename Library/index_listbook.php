<?php
    include 'session_user.php';
    require 'mysql/connect.php';
    $sql="SELECT * FROM books INNER JOIN booktype ON books.bt_id = booktype.bt_id ";
    $result = mysqli_query($dbcon,$sql);

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Easy Search</title>
    <!-- Required meta tags -->
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



  </head>
  <body>

    <div class="row">
      <div class="col-12">
        <table class="table">
          <thead class="table-active">
          <tr>
              <th>รหัสหนังสือ</th>
              <th>ชื่อหนังสือ</th>
              <th>ชื่อผู้เขียนหนังสือ</th>
              <th>หมวดหมู่</th>

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
            
        </tr>
        <?php
            }
            require 'mysql/uncon.php';
        ?>
        </table>
    </div>
    </div>
  </body>
</html>