<?php
    require 'mysql/config.php';
    $mid = $_GET['mid'];
    require 'mbr_select.php';

    ?>

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
    <title>Library System</title>
</head>
<body>
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