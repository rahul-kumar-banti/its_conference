<?php

$host = "localhost";
$user  = "root";
$password =  "";
$database1 = "its_conf";

$db1 = new mysqli($host, $user, $password, $database1);
/*if($db1->connect_errno > 0){
    die('Unable to connect to database' . $db1->connect_error);
}else{
    echo "Database jobportal is connected.";
}
*/

/*if($db2->connect_errno > 0){
    die('Unable to connect to database' . $db2->connect_error);
}else{
    echo "Database location is connected.";
}
*/
?>