<?php
include 'session_user.php';
require 'mysql/connect.php';
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
    <title>ProductForm</title>
    <style>
        label{
            display: block;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>ข้อมูลหนังสือ</h2>
    <form action="add_b.php" method="post" enctype="multipart/form-data" id="form1">
    <div class="form-group">
    <fieldset>
    <legend>เพิ่มหนังสือ</legend>

        <label for="bid">รหัสหนังสือ : </label><input class="form-control" name="bid" type="text" id="bid" placeholder="กรอกรหัสหนังสือ">
        <label for="btitle">ชื่อหนังสือ : </label><input class="form-control" name="btitle" type="text" id="btitle" placeholder="กรอกชื่อหนังสือ">
        <label for="bauth">ชื่อผู้แต่งหนังสือ : </label><input class="form-control" name="bauth" type="text" id="bauth" placeholder="กรอกประเภทหนังสือ">
        <label for="bt_id">หมวดหนังสือ</label></label>
        <?php
                $sql = "SELECT * FROM booktype";
                $result = mysqli_query($dbcon,$sql);
        ?>
        <select class="form-control" name="bt_id" id="bt_id">
            <option value="">---เลือกหมวดหนังสือ---</option>
            <?php
                    while($row = mysqli_fetch_array($result)){
                        echo"<option value='$row[0]'>$row[1]</option>";
                    }
            ?>
            
        </select>
        <br><br>
      
        <input class="btn btn-success" name="submit" type="submit" id="submit" value="เพิ่มข้อมูล">
       
        <a class="btn btn-danger" href="show_b.php">กลับหน้าหลัก</a> 
    </fieldset>
    </div>
    </form>
    </div>
</body>
</html>