<?php
    include 'session_user.php';
    require 'mysql/connect.php';
    $sql = "SELECT * FROM books INNER JOIN booktype ON books.bt_id = booktype.bt_id";
    
    if(isset($_GET['kw'])){
        $kw=$_GET['kw'];
        $sql.=" WHERE bid='$kw' OR btitle LIKE '%$kw%' OR bauth LIKE '%$kw%' OR bt_name LIKE '%$kw%'";
    }else{
        $kw="";
        $sql.=" WHERE bid IS NULL";
    }

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
    <div class="col-xs-12 mt-3 container">
        <form action="index_searchbook.php" method="get" target="_self">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">คำที่ต้องการค้นหา :</label>
                <div class="col-sm-5">
                    <input class="form-control" name="kw" type="text" id="kw" value="<?php echo($kw);?>" placeholder="ชื่อหนังสือ,ชื่อผู้แต่ง,หมวดหมู่">   
                </div>
                <div class="col-sm-2">
                    <input class="btn btn-primary" name="submit" type="submit" value="ค้นหา">
                </div>
                <form>
                    <input type="button" class="btn btn-danger" value="Back to Home" onclick="window.location.href='index2.php' " />
                </form>
            </div>
        </form><br/>
    </div>
    <table class="table table-bordered container">
        <tr>
            <td>รหัสหนังสือ</td>
            <td>ชื่อหนังสือ</td>
            <td>ชื่อผู้เขียนหนังสือ</td>
            <td>หมวดหมู่</td>

        </tr>
<?php
    $result = mysqli_query($dbcon,$sql);
    while($record = mysqli_fetch_array($result)){
?>
<tr>
<td><?php echo($record[0]); ?></a></td>
<td><?php echo($record[1]); ?></td>
<td><?php echo($record[2]); ?></td>
<td><?php echo($record['bt_name']); ?></td>
</tr>
<?php
    }
    require 'mysql/uncon.php';
?>

</table><br/>









  </body>
</html>