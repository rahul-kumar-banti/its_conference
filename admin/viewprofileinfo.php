<?php 
include_once("../includes/config.php");
session_start();
if(isset($_SESSION['id'])){
$profileides=$_POST['profileid'];
$ides=explode(",",$profileides);
foreach($ides as $id){
    $sql="select * from account where member_id='$id'";
    $result=$db1->query($sql);
    $r=$result->fetch_assoc();
    $profile=$r['photo']==''?"./uploads/images/default.jpg":"./uploads/images/".$r['photo'];
 ?>
 <div class="profileouter">
<div class=" row">
    <div class="col-lg-2">
        <img src="<?php echo $profile ?>" alt="" class="round-circle img-fluid userProfileImg">
    </div>
    <div class="col-md-3">
        <div class="profileusername font-weight-bold text-capitalize ">Name:- <?php  echo $r['full_name']; ?></div>
        <div class="profileuserid text-sm text-capitalize ">Member-id:- <?php  echo $r['member_id']; ?></div>

    </div>
    <div class="col-md-4">
    <div class="profileusername font-weight-bold text-capitalize ">email:- <?php  echo $r['email']; ?></div>
        <div class="profileuserid text-sm text-capitalize text-danger">mobile no:- <?php  echo $r['moble_no']; ?></div>
    </div>
    <div class="col-md-3">
    <div class="profileusername font-weight-bold text-capitalize ">Catagory:- <?php  echo $r['category']; ?></div>
        <div class="profileuserid text-sm text-capitalize ">organization:- <?php  echo $r['organization']; ?></div>
    
    </div>

</div>
</div>

 <?php   
}


}
?>
