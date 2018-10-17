<?php
 include 'session_user.php';
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
    <title>หน้าหลัก</title>
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
        <a class="nav-link" href="show_b.php">การจัดการข้อมูลหนังสือ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mbr_list.php">การยืมและคืนหนังสือ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">หน้าต่างสถานะสมาชิก</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-danger" onclick="window.location.href='logout.php'" >Logout</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
    <div class="form-group row " style="padding : 10px">
        <form style="padding : 10px" action="show_b.php" method="get" target="_self">
            <input class="btn btn-primary btn-lg" name="Fixxing" type="submit" value="การจัดการข้อมูลหนังสือ">
        </form>
        <form style="padding : 10px" action="mbr_list.php" method="get" target="_self">
            <input class="btn btn-primary  btn-lg" name="Lending" type="submit" value="การยืมและคืนหนังสือ">
        </form>
        <form style="padding : 10px" action="status_m.php" method="get" target="_self">
            <input class="btn btn-primary  btn-lg" name="Lending" type="submit" value="หน้าต่างสถานะสมาชิก">
        </form>

    </div>
</div>
</body>
</html>