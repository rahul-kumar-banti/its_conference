<?php
include_once("./includes/config.php");

$name=$_POST['fullname'];
$email=$_POST['email'];
$mobile_no=$_POST['mobile'];
$country=$_POST['country'];
$category=$_POST["category"];
$state=$_POST['state'];
$organization=$_POST["organization"];
$address=$_POST['address'];
 $member_id=$_POST["member_id"];


 $q1="UPDATE account SET full_name='$name',email='$email', moble_no='$mobile_no',category='$category',country='$country',state='$state',address='$address', organization = '$organization' WHERE member_id = '$member_id'";

if (!mysqli_query($db1,$q1))
{
    echo("Error description: " . mysqli_error($db1));
}
else{
    header('location:user_dashboard.php?msg=updated');
}



?>