<?php if ($login) {
?>
<div class="userProfileRow">
    <div class="row">
        
        <div class="col-md-2">
            <img class="img-fluid  rounded-circle userProfileImg" src="<?php echo $_SESSION['photo']; ?>" alt="Card image cap">
        </div>
        <div class="col-md-6">
        <div class=" text-capitalize text-danger font-weight-bold"><?php echo $row['full_name']; ?> </div>
             <div class="  text-capitalize  text-success">Member id: <?php echo $row['member_id']; ?> </div>
        </div>
        <div class="col-md-2 userprofileChanger">
         <button type="button" class="btn btn-primary text-center mx-auto" data-toggle="modal" data-target="#changeimg">Change Image </button>
        
        </div>
        <div class="col-md-3"></div>
    </div></div>
<?php



} ?>