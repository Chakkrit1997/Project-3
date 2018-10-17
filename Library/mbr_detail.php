<?php
    //include 'session_user.php';
    //require 'mysql/config.php';
    $mid = $_GET['mid'];
    require 'mbr_select.php';

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
    <title>Library System</title>
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
        <a class="nav-link active" href="#">การยืมและคืนหนังสือ</a>
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
<br/>
<div class="container">
<table class="table table-bordered">
    <tr>
    <td>Memder Detail</td>
    </tr>
    <tr>
    <td align="right">ID :</td>
    <td align="left"><?php echo($mid); ?></td>
    </tr>
    <tr>
    <td align="right">Name :</td>
    <td align="left"><?php echo($mname); ?></td>
    </tr>
    <tr>
    <td align="right">Department :</td>
    <td align="left"><?php echo($mdep); ?></td>
    </tr>
    <tr>
    <td colspan="2" align="center"><a class="btn btn-danger" href="mbr_list.php">Back</a></td>
    </tr>
</table>
<br/>
<?php    require 'brw_form.php';?><br/>
<?php    require 'brw_list.php';?><br/>
<?php    require 'fne_list.php';?>
</div>
</body>
</html>