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
    <style>
    form {
        padding:2 px;
    }
    
    </style>
    <title>หน้าหลัก</title>
</head>
<body>
<div class="container align-middle">
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