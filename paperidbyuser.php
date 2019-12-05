<?php 
session_start();
include_once('./includes/config.php');
if (isset($_SESSION["id"])) {
  $login = true;
  $id = $_SESSION['id'];
  $sql="SELECT distinct paper_id FROM paper_details where member_id='$id'";
  $result =$db1->query($sql);
 if($result->num_rows>0){
   echo '<label>Paper Id</label><select class="custom-select peperidupdate paperidforpayment" name="paper_id_for_update">';
 while($r=$result->fetch_assoc()){
    ?>
   <option value="<?php echo $r['paper_id']; ?>"><?php echo $r['paper_id']; ?></option>
      
      
      <?php
    
     }
    }
    else{
        echo "<h4 class="."text-danger".">No Paper has submited yet.upload fresh copy</h4>";
    }
}
?>