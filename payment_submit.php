<?php 
session_start();
include_once('./includes/config.php');
if (isset($_SESSION["id"])) {
  $login = true;
  $id = $_SESSION['id'];
  $p_id=$_POST['p_id'];
  $p_mode=$_POST['p_mode'];
  $amount=$_POST["amount"];
  $payment_no=$_POST['payment_no'];
  $bankname=$_POST['bankname'];
  $transition_date=$_POST['transition_date'];
  $remark="";
  $status=0;

  $sql="INSERT INTO payment (payment_id, paper_id, member_id, transition_id, mode_of_paymant, payment_date, amount,status,remark) 
  VALUES (NULL, '$p_id', '$id', '$payment_no', '$p_mode', '$transition_date', '$amount','$status','$remark')";
  if($db1->query($sql)){
      echo "success";
  }
  else{
      echo "fail";
  }
}

  ?>