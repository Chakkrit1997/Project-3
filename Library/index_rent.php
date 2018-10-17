<?php
    include 'session_user.php';
    require 'mysql/connect.php';
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
  <table class="table table-bordered">
        <tr>
        <td>Book ID</td>
        <td>Title</td>
        <td>Lend Date</td>
        <td>Dead Line</td>
        </tr>
        <?php
        //$mid = '$session_login_id';
        $sql = "SELECT books.bid, books.btitle ,transections.tlend, DATE_ADD(transections.tlend,INTERVAL 7 DAY)AS deadline FROM books, transections WHERE books.bid=transections.bid AND transections.mid='$session_login_id' AND transections.tstat='1'";
        $result = mysqli_query($dbcon,$sql);
        while($record = mysqli_fetch_array($result)){
        ?>
        <tr>
        <td><?php echo($record[0]);?></td>
        <td><?php echo($record[1]);?></td>
        <td><?php echo date_format(date_create($record[2]),"d/m/Y");?></td>
        <td><?php echo date_format(date_create($record[3]),"d/m/Y");?></td>
        </tr>
        <?php
        }
        require 'mysql/uncon.php';
        ?>
    </table>

  </body>
</html>