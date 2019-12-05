<?php

include_once('./includes/config.php');

$email=$_POST['email'];
 $passd=$_POST['password'];
$query=mysqli_query($db1,"select * from account where email='$email'");
$result=mysqli_fetch_array($query,MYSQLI_ASSOC);
if(($result>0) && (  $passd== $result['password']  ) ){
    if($result['ac_type']=="user")
    {
        session_start();
        $_SESSION["id"] = $result['member_id'];
        $_SESSION["type"] = $result['ac_type'];
        $_SESSION["email"]=$result["email"];
        header('location:user_dashboard.php?msg=success');
    }
 elseif($result['ac_type']=="admin")
 {
     session_start();
     $_SESSION["id"] = $result['member_id'];
     $_SESSION["type"] = $result['ac_type'];
     $_SESSION["email"]=$result["email"];
     header('location:admin_dashboard.php?msg=success');
 }
}
else
{
    echo "account not found";
header('location:index.php?msg=failed');
}
?>