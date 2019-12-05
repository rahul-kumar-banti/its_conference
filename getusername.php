<?php
include("./includes/config.php");
$m_id=$_POST['userid'];
 $q = "SELECT full_name FROM account where member_id='$m_id'";
 
 $result =$db1->query($q);
 if($result->num_rows>0){

 
 while($r=$result->fetch_assoc()){
    ?>
    <div class="text-success"><?php echo $r['full_name']; ?></div>
      
      
      <?php
    
     }
    }
    else{
        echo "user not found";
    }
    
    ?> 
    