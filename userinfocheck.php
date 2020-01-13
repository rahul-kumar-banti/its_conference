<?php
include_once("./includes/config.php");
$uid=$_POST['uid'];
$q="select member_id from account where email='".$uid."'";
$result = $db1->query($q);
if ($result->num_rows > 0)
{
    echo "true";
}
else{
    echo "false";
}
?>