<?php
    //include 'session_user.php';
    //require 'mysql/config.php';
    $login_id = $_GET['login_id'];
    require 'mbr_select.php';

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
    <title>Library System</title>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark" id="nav">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">AdminEasySearch</a>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0" id="nav1">
          <li class="nav-item ">
            <a class="nav-link" href="index.php" >จัดการข้อมูลหนังสือ</a>
          </li>
         <!-- <li class="nav-item">
            <a class="nav-link" href="#" data-target="index_listbook">รายชื่อหนังสือ</a>
          </li>-->
          <li class="nav-item">
            <a class="nav-link" href="index.php">ยืมและคืนหนังสือ</a>
          </li>
          <!--<li class="nav-item">
            <a class="nav-link" href="#" data-target="index_rent">ข้อมูลการยืม</a>
          </li>-->
          <li class="nav-item ">
            <a class="nav-link " href="index.php">จัดการข้อมูลสมาชิก</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
          <input type="button" class="btn btn-danger btn-sm " value="Log out" onclick="window.location.href='logout.php'" >
        </form>
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
    <td align="left"><?php echo($login_id); ?></td>
    </tr>
    <tr>
    <td align="right">Name :</td>
    <td align="left"><?php echo($firstname); ?></td>
    </tr>
    <tr>
    <td align="right">Department :</td>
    <td align="left"><?php echo($login_status); ?></td>
    </tr>
    <tr>
    <td colspan="2" align="center"><a class="btn btn-danger" href="index.php">Back</a></td>
    </tr>
</table>
<br/>
<?php    require 'brw_form.php';?><br/>
<?php    require 'brw_list.php';?><br/>
<?php    require 'fne_list.php';?>
</div>
</body>
</html>