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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">


  </head>
  <body class="mt-5 forms-body">
  <div class="container">
      <!--  Start Heading -->
      <div class="text-center">
          <p class="h1 text-center text-justify">Welcome to Easysearch Web App!</p>
        <img  src="images/easysearching.jpg" class="rounded img-fluid" alt="Responsive image" width="1170" height="250">
      </div>


      

      <!--  Start Login Form-->
      <form class="mt-5 myForm" method="post" action="login.php">
        <div class="text-center">
            <h2 class="mt-2 font-weight-normal">Student & Librarian Login</h2>
        </div>
        <div class="form-group mt-5">
          <input type="text" class="form-control" name="username" id="username" placeholder="Username" required autofocus>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
            Remember Me
          </label>
        </div>

        <div class="form-group">
          <button type="submit" name="login" class="mt-2 btn btn-primary btn-block">Login</button>
        </div>
        
        <!-- Button trigger modal -->
        <div class="text-center ">
            <button type="button" class="mt-2 btn btn-danger btn-block" data-toggle="modal" data-target="#myModal">
            Register
            </button>
        </div>
      </form>
      <!--  End Login Form-->
  </div>

<!-- Start Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <!--  Start Register Form-->
      <form class="mt-5 myForm" method="post"action="register.php">
        <div class="text-center">
            <h2 class="mt-2 font-weight-normal">Student Register</h2>
        </div>
        
        <div class="form-group mt-5">
            <input type="text" class="form-control" name="username" id="username_register" onkeyup="checkusername();" placeholder="Username" required autofocus>
            <span id="name_status"></span>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="password" id="password_register" placeholder="Password" required>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="ConfirmPassword" required>
        </div>
        <div class="form-group">
          <input type="email" class="form-control" name="email" id="email_register" placeholder="Email Address" required>
        </div>
        <button type="submit" name="login" class="mt-2 btn btn-success btn-block ">Register</button>
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
    <!-- Check confirm Password -->
    <script type="text/javascript">//Confirm password
      var password = document.getElementById("password_register"),
      confirm_password = document.getElementById("confirm_password");
      function validatePassword(){
        if(password.value != confirm_password.value) {
          confirm_password.setCustomValidity("Passwords Don't Match");
        } else {
          confirm_password.setCustomValidity('');
        }
      }
      password.onchange = validatePassword;
      confirm_password.onkeyup = validatePassword;
    </script>

    <!-- Check Username ซ้ำกัน -->
    <script type="text/javascript">
      function checkusername(){
        var name=document.getElementById( "username_register" ).value;
        if(name){
          $.ajax({
            type: 'post',
            url: 'check_username.php',
            data: {
              username:name,
            },
            success: function (response) {
              $( '#name_status' ).html(response);
              if(response=="Available"){
                $("#name_status").css('color', '#0AC02A', 'important');
              return true;
              } else {
                $("#name_status").css('color', '#FF0004', 'important');
                return false;
              }
            }
          });
        } else {
          $( '#name_status' ).html("");
          return false;
        }
      }
    </script>

    <!-- jQuery -->
    <script src="js/jquery-3.3.1.min.js"></script>

    <!--  Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>


    
  </body>
</html>