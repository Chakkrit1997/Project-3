<?php
include 'session_user.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Easy_Search</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

  </head>
  <header class="container">
    <nav class="navbar navbar-dark bg-dark">
        <a href="#" class="navbar-brand">Easysearch</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="logout.php" class="nav-link">Logout</a>
            </li>
        </ul>
        
    </nav>
  </header>

  
  <body>
    <div class="container">
        <h1 class="">User_page</h1>
        <?php
            echo "Login ID : " . $_SESSION['login_id'];
            echo "<br>";
            echo "ยินดีต้อนรับ $s_login_username <br>อีเมลล์ $s_login_email";
        ?>
        <div>
            <form>
                <input type="button" class="btn" value="Log out!" onclick="window.location.href='logout.php'" />
            </form>
        </div>
    </div>
    
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>



    