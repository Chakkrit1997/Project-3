<?php

$bid = $_GET['bid'];
$sql = "SELECT * FROM books WHERE bid = '$bid'";
require 'mysql/connect.php';
$rowb = mysqli_fetch_array($result, MYSQLI_ASSOC);


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
<form action="edit_b.php" method="post" enctype="multipart/form-data" id="form1">
    <fieldset>
    <legend>แก้ไขข้อมูล</legend>

        <label for="bid">รหัสหนังสือ : </label><input class="form-control" name="bide" type="text" id="bide" value="<?php echo $rowb['bid']; ?>">
        <label for="btitle">ชื่อหนังสือ : </label><input class="form-control" name="btitle" type="text" id="btitle" value="<?php echo $rowb['btitle']; ?>">
        <label for="bauth">ชื่อผู้เขียนหนังสือ : </label><input class="form-control" name="bauth" type="text" id="bauth" value="<?php echo $rowb['bauth']; ?>">
        <?php
            $sql = "SELECT * FROM booktype";
            require 'mysql/connect.php';
        ?>
        <label for="bt_id">หมวดหนังสือ</label>
         <select class="form-control" name="bt_id" id="bt_id">
            <option value="">---เลือกหมวดหนังสือ---</option>
            <?php
                    while($row = mysqli_fetch_array($result)){
                        if($row[0] == $rowb['bt_id']){
                            echo"<option value='$row[0]'selected>$row[1]</option>";
                        }else{
                            echo"<option value='$row[0]'>$row[1]</option>";
                        }
                    }
            ?>
        </select>
        <br><br>
        <input type="hidden" name="bid" id="bid" value="<?php echo $rowb['bid'];?>">
        <input class="btn btn-success" name="submit" type="submit" id="submit" value="แก้ไขข้อมูล">
        <a class="btn btn-danger" href="show_b.php" >กลับหน้าหลัก</a>
    </fieldset>
    </div>
</form>
</body>
</html>