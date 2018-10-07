<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    .card-deck{
        text-align:center;
    }
    .topchart{
        position:center;
    }
    
    </style>
    <title>หน้าหลัก</title>
</head>
<body>
<div class="container" >
 <?php $id = 'IT001'; ?>
    <a class="btn btn-warning warn_lnd" name="view" value="view" id="<?php echo $id ; ?>">แจ้งเตือน</a>
    <h2>หน้าหลัก</h2>

    <!-- Card Show NewBooks -->
   <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="\Books\src\img\1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="\Books\src\img\3.jpg" wight="" height="" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="\Books\src\img\2.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
<br/>

    <!-- Card Show TopChart -->

    <div class="topchart" >
    <h3># Top Chart #</h3>
    <br/>
    <?php
        $count = 1 ;
        $sql = "SELECT * FROM books";
        require 'mysql/connect.php';

        while( $row = mysqli_fetch_array($result)){
            if( $count <= 5){
    ?>
    
    <div class="card w-100">
        <div class="card-body">
        <p class="p-2 bg-secondary text-white" style="float:right;">VIEW</p>
            <img class="card-img-left " style="float:right;" src="\Books\src\img\1.jpg" width="150px" heigth="auto" alt="Card image cap">
            
            <h4 class="card-title">#<?php echo $count ;?> <?php echo $row['btitle'] ;?></h4>
            <div style="float:left;">
            <p class="card-text">BOOK ID : <?php echo $row['bid']; ?> </p>
            <p class="card-text">AUTHOR NAME : <?php echo $row['bauth']; ?></p>
            <br/>
            <a href="#" class="btn btn-primary">VIEW</a>
           
            </div>
        </div>
    </div>
    <br/>
    <?php
            }
            $count = $count+1;
        }
    ?>
    </div>

      <!-- Card Show TopChart -->

    <div class="topchart">
    <h3># Top Chart #</h3>
    <br/>
    <?php
        $count = 1 ;
        $sql = "SELECT * FROM books";
        require 'mysql/connect.php';

        while( $row = mysqli_fetch_array($result)){
            if( $count <= 5){
    ?>
    
    <div class="card w-75">
        <div class="card-body">
            <h5 class="card-title"><?php echo $row['btitle'] ;?></h5>
            <p class="card-text">BOOK ID : <?php echo $row['bid']; ?> </p>
            <p class="card-text">AUTHOR NAME : <?php echo $row['bauth']; ?></p>
            <a href="#" class="btn btn-primary">Button</a>
        </div>
    </div>
    <br/>
    <?php
            }
            $count = $count+1;
        }
    ?>
    </div>
</div>
<?php require 'warn_modal.php'; ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
$(document).ready(function(){
    $('.warn_lnd').click(function(){
      var id = $(this).attr("id");
      //alert(uid);
      $.ajax({
            url:"warn_select.php",
            method:"post",
            data:{id:id},
            success:function(data){
                $('#detail').html(data);
                $('#dataModal').modal('show');
        }
      });
    });
});    
</script>
</body>
</html>