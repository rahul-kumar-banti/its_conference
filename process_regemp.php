<?php

include_once('./includes/config.php');
$name=$_POST['name'];
$email=$_POST['email'];
$mobile_no=$_POST['mobile_no'];
$country=$_POST['country'];
$organization=$_POST['author'];
$password=$_POST['pass'];
$hash = password_hash($password, PASSWORD_DEFAULT);
$category=$_POST["category"];
$state=$_POST['state'];

$address=$_POST['address'];

$member_id=substr($email,0,5).substr($mobile_no,4,8);
$member_id=str_replace(" ",'',$member_id);
$actype="user";




$query5 =  "INSERT INTO account (member_id, full_name, email, moble_no, category, country, state, password, address, ac_type,organization) 
VALUES ('$member_id', '$name', '$email', '$mobile_no', '$category', '$country', '$state', '$password', '$address', '$actype','$organization')";

 //$result2 = mysqli_query($db1,$query5);
if (!mysqli_query($db1,$query5))
{
    echo("Error description: " . mysqli_error($db1));
    $ex=explode(" ",mysqli_error($db1));
    if($ex[0]=="Duplicate"){
        header('location:index.php?msg=all_ready_reg&memberid=0');    
    }
}
else{
    
    header('location:index.php?msg=registered&memberid='.$member_id);
}
?>