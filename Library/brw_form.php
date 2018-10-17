<form action="lnd_save.php" method="post" name="brw_form" target="_self">
<div class="form-group row">
    <input name="login_id" type="hidden" value="<?php echo($login_id); ?>">
    <label class=" col-sm-1 col-form-label">Book ID :</label> 
    <div class="col-sm-5">
        <input class="form-control" name="bid" type="text">
    </div>
    <div class="col-sm-1">
        <input class="btn btn-primary" name="submit" type="submit" value="OK">
    </div>
</div>


</form>