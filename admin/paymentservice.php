  <?php

    switch ($_SERVER['REQUEST_METHOD']) {
        case 'GET':
            frompaymenttable(4);
            break;
        case 'POST':
            $ptype = $_POST['filtertype'];
            if ($ptype == 0 || $ptype == 1 || $ptype == 2||$ptype==4) {
                frompaymenttable($ptype);
            } else {
                unpaid();
            }

            break;
        default:
    }


    function frompaymenttable($pid)
    {
        if ($pid == 0) {
            $heading = "un-verified Payment";
        } elseif ($pid == 1) {
            $heading = "verified Payment";
        } else {
            $heading = "Rejected Payment";
        }
        if ($pid == 4) {
            $sql = "select * from payment";
        } else {
            $sql = "select * from payment where status='$pid'";
        }
?>
<table class="table">
      <thead>
      <tr>
              <th scope="col">#</th>
              <th scope="col">User Id</th>
              <th scope="col">Paper Id</th>
              <th scope="col">Payment Mode</th>
              <th scope="col">Transaction No.</th>
              <th scope="col">Bank Name</th>
              <th scope="col">Payment date</th>
              <th scope="col">Amount</th>
              <th scope="col">Action</th>
              <th scope="col">remark</th>

          </tr>
      </thead>
      <tbody>

      <?php
      $count=1;
        include_once("../includes/config.php");
        $result = $db1->query($sql);
        while ($r = $result->fetch_assoc()) {
        ?>
  <tr>
      <td><?php echo $count++;?></td>
      <td class="showpointer" onclick="profileviewer('<?php echo $r['member_id']; ?>')"><?php echo $r['member_id'];?></td>

      <td class="showpointer" onclick="paperviewer('<?php echo $r['paper_id']; ?>')"><?php echo $r['paper_id'];?></td>
      <td><?php echo $r['mode_of_paymant'];?></td>
      <td><?php echo $r['transition_id'];?></td>
      <td><?php echo $r['bank'];?></td>
      <td><?php echo $r['payment_date'];?></td>
      <td><?php echo $r['amount'];?></td>
        <?php  if($r['status']==1) { ?><td><span class="badge badge-success">Verified</span> </td><td><?php echo $r['remark'];?></td><?php }?>
        <?php  if($r['status']==2) { ?><td><span class="badge badge-danger">Rejected</span> </td><td><?php echo $r['remark'];?></td><?php }?>
        <?php  if($r['status']==0) { ?><td><div class="btn-group btn-group-sm">
  <button type="button" class="badge badge-success">Verify</button>
  <button type="button" class="badge badge-danger">Reject</button></div></td>
        <td><input type="text" name="remark" class="remark input form-control"placeholder="enter remark"></td><?php }?>

  </tr>
        <?php

        } 

        ?>
        </tbody>
  </table>
        <?php
    }

    function  unpaid()
    {
        echo "unpaid";
    }
    ?>