<?php
session_start();
include_once('./includes/config.php');
if (isset($_SESSION["id"])) {
    $login = true;
    $id = $_SESSION['id'];
    
    $sql = "create or replace VIEW transview as SELECT p.*,pp.transition_id,pp.status ,pp.remark from paper_details p  left JOIN payment pp on p.paper_id=pp.paper_id where p.member_id='$id'";
    $sqll="SELECT    t.* from transview t where version=(SELECT max(version)  as version from transview as k where k.paper_id=t.paper_id GROUP by paper_id  );";
    $db1->query($sql);
    $result = $db1->query($sqll);
    if ($result->num_rows > 0) {
        ?>
        <table class="table table-responsive" id="section-to-print">
            <thead>
                <tr>
                    <th scope="col">PaperId</th>
                    <th scope="col">Paper Title</th>
                    <th scope="col">catagory</th>
                    <th scope="col">Date</th>
                    <th scope="col">version</th>
                    <th scope="col">document</th>
                    <th scope="col">Payment Status</th>
                    <th scope="col">Remark</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                        while ($r = $result->fetch_assoc()) {
                            ?>
                    <tr>
                        <td><?php echo $r['paper_id'] ?></td> 
                        <td><?php echo $r['paper_title'] ?></td>
                        <td><?php echo $r['paper_catagory'] ?></td>
                        <td><?php echo date("d-M-Y",strtotime($r['date']));
                         ?></td>
                        <td><?php echo $r["version"] ?></td>
                        <td><a href="./uploads/document/<?php echo $r['document']; ?>" download><?php echo $r['document']; ?></a></td>
                        <td>
<?php
if($r['transition_id']!=NULL){
    if($r['status']==0)
    echo "<span class='btn-info'>Submitted</span>";

     elseif($r['status']==1)
     echo "<span class='btn-success'>verified</span>"; 

     else
     echo "<span class=' btn-danger'>rejected</span>";
     


}

else{
    $fun='onclick="paymentsubmitform(\''.$r["paper_id"].'\')"';
    echo '<button class="btn btn-primary btn-sm paymentbtn" data-toggle="modal" '.$fun.' data-target="#paymentmodal" id="'.$r["paper_id"].' ">pay now</button>';
}
?>


                        </td>
                        <td>
                        <?php echo $r['remark'] ?>
                        </td>
                    </tr>

                <?php

                        } ?>
            </tbody>
        </table>
<?php
    } else {
        echo "<h4 class="."text-center bg-warning".">user has not uploaded any paper yet</h4>";
    }
}
$db1->close();
?>