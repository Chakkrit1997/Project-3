<?php
 include 'session_user.php';
 require 'mysql/connect.php';
 $sql="SELECT * FROM tb_login WHERE login_id='$session_login_id'";
 $result = mysqli_query($dbcon,$sql);
 $record = mysqli_fetch_array($result);

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
  <div class="container">
        <h1 class="">ข้อมูลส่วนตัว</h1>
            <?php
                
                echo "$record[firstname] $record[lastname] ";
                echo "<br>";
                echo "อีเมลล์ $record[login_email]";
                echo "<br>";
                echo "คุณคือ $record[login_status]";
                echo "<br>";
                echo "Login ID : $record[login_id]";
                echo "<br>";
            ?>
            <button type="button" class="mt-2 btn btn-danger " data-toggle="modal" data-target="#myModal">
              แก้ไขข้อมูลส่วนตัว
            </button>
    </div>
<!-- Start Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">แก้ไข ข้อมูลส่วนตัว</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <!--  Start Register Form-->
      <form class="mt-5 myForm" method="post"action="index_editprofile.php">
        <div class="text-center">
            <h2 class="mt-2 font-weight-normal">กรอกข้อมูลที่ต้องการแก้ไข</h2>
        </div>

        <div class="form-group"><h6>ชื่อ</h6>
          <input type="text" class="form-control" name="firstname" id="firstname_register" value="<?php echo($s_login_firstname);?>" placeholder="Firstname" required>
          <span id="name_status"></span>
        </div>
        <div class="form-group"><h6>นามสกุล</h6>
          <input type="text" class="form-control" name="lastname" id="lastname_register" value="<?php echo($s_login_lastname);?>" placeholder="Lastname" required>
        </div>
        <div class="form-group"><h6>อีเมลล์</h6>
          <input type="email" class="form-control" name="email" id="email_register" value="<?php echo($s_login_email);?>" placeholder="Email Address" required>
        </div>

        <button type="submit" name="login" class="mt-2 btn btn-success btn-block" id="btn_regis">บันทึก</button>
      </form>
      <!--  End Register Form-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- End Modal -->

  </body>
</html>
    