<?php
include 'session_user.php';
require 'mysql/connect.php';
$login_id = $_GET['login_id'];
$sql = "SELECT * FROM tb_login WHERE login_id = '$login_id'";
$result = mysqli_query($dbcon,$sql);
$rowb = mysqli_fetch_array($result);


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
    <title>Document</title>
    <style>
        label{
            display: block;
        }
    </style>
</head>
<body>
<div class="container">
<form action="edit_mb.php" method="post" enctype="multipart/form-data" id="form1">
    <fieldset>
    <legend>แก้ไขข้อมูล</legend>

        <label for="login_ide">รหัสสมาชิก : </label><input class="form-control" name="login_ide" type="text" id="login_ide" value="<?php echo $rowb[0]; ?>">
        <label for="login_login_username">USER : </label><input class="form-control" name="login_username" type="text" id="login_username" value="<?php echo $rowb[1]; ?>">
        <label for="login_email">EMAIL : </label><input class="form-control" name="login_email" type="text" id="login_email" value="<?php echo $rowb[3]; ?>">
       
        </select>
        <br><br>
        <input type="hidden" name="login_id" id="login_id" value="<?php echo $rowb[0];?>">
        <input class="btn btn-success" name="submit" type="submit" id="submit" value="แก้ไขข้อมูล">
        <a class="btn btn-danger" href="index.php" >กลับหน้าหลัก</a>
    </fieldset>
    </div>
</form>
</body>
</html>