<!DOCTYPE html>
<html>
<body>

<!--input values in array $count-->
<?php
require 'mysql/connect.php';
$i=1;
$sql = "SELECT count_borrow FROM books";
$result = mysqli_query($dbcon,$sql);
$count[] ='';
while($rowb = mysqli_fetch_array($result)){
    $count[$i] = $rowb['count_borrow'];
  //  echo $count[$i];
    $i=$i+1;
    //echo $i;
    
}
/* sort max-min */
rsort($count);
$arrlength = count($count);
for($x = 0; $x < $arrlength; $x++) {
   // echo $count[$x];
   //echo "<br>";
}
require 'mysql/uncon.php';
/*show pop books are borrowed */
require 'mysql/connect.php';
$i = 1;
while($i<=5){
    $showpp=$count[$i];
    $sql = "SELECT * FROM books WHERE count_borrow = '$showpp'";
    $result = mysqli_query($dbcon,$sql);
    while($row = mysqli_fetch_array($result)){
        $photo = "src/img/".$row['bid'].".jpg";
        if($i<=5){
            ?>
            <div class="card w-100">
            <div class="card-body">
                <img class="card-img-left " style="float:right;" src="<?php echo($photo);?>" width="150px" heigth="auto" alt="Card image cap">
                <h4 class="card-title">#<?php echo $i ;?> <?php echo $row['btitle'] ;?></h4>
                <div style="float:left;">
                <p class="card-text">รหัสหนังสือ : <?php echo $row['bid']; ?> </p>
                <p class="card-text">ชื่อหนังสือ : <?php echo $row['btitle']; ?> </p>
                <p class="card-text">ชื่อผู้แต่ง : <?php echo $row['bauth']; ?></p>
                <p class="card-text">VIEW : <?php echo $showpp ;?></p>
                <br/>
                <a href="#" class="btn btn-primary">VIEW</a>
            
                </div>
            </div>
        </div>
        <br/>
        <?php
            $i=$i+1;
        }
    }
}
?>

</body>
</html>