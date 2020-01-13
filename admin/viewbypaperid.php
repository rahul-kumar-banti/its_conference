<?php 
include_once("../includes/config.php");
session_start();
if(isset($_SESSION['id'])){
$paperid=$_POST['paperid'];
$sql="select version,date,document from paper_details where paper_id='$paperid' ORDER by version ASC;";
$result=$db1->query($sql);
if($result->num_rows<0){
    echo "<h2>no data found</h2>";
}
    else{
        echo '<table class="table table-responsive table-hover">';
        echo "<tr><th>version</th> <th>date</th><th>document</th></tr>";
        while($r=$result->fetch_assoc()){
            $dates=$r['date'];
            $days=explode(" ",$dates);
            
            ?>
<tr>
     <td><?php echo $r['version']; ?></td>
     <td><?php echo $days[0]; ?></td>
     <td><a href="<?php echo $r['document']; ?>" download=""><?php echo $r['document']; ?></a></td>
</tr>
<?php
        }
        echo "</table>";

    }

?>






<?php } ?>