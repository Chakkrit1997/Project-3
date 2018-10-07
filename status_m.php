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
    <title>สถานะสมาชิก</title>
</head>
<body>
<div class="container">
    <br/>
    <h1>รายการหนังสือที่ยืม</h1>
    <table class="table table-bordered">
        <tr>
        <td>Book ID</td>
        <td>Title</td>
        <td>Lend Date</td>
        <td>Dead Line</td>
        </tr>
        <?php
        $mid = 'IT001';
        $sql = "SELECT books.bid, books.btitle ,transections.tlend, DATE_ADD(transections.tlend,INTERVAL 7 DAY)AS deadline FROM books, transections WHERE books.bid=transections.bid AND transections.mid='$mid' AND transections.tstat='1'";
        require 'mysql/connect.php';
        while($record = mysqli_fetch_array($result)){
        ?>
        <tr>
        <td><?php echo($record[0]);?></td>
        <td><?php echo($record[1]);?></td>
        <td><?php echo date_format(date_create($record[2]),"d/m/Y");?></td>
        <td><?php echo date_format(date_create($record[3]),"d/m/Y");?></td>
        </tr>
        <?php
        }
        require 'mysql/uncon.php';
        ?>
    </table>
    <a class="btn btn-danger" href="index.php">กลับหน้าหลัก</a>
    </div>
</body>

</html>
