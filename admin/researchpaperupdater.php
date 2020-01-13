<?php
include_once("../includes/config.php");
session_start();
if(isset($_SESSION['id'])){
$sql1="CREATE or REPLACE VIEW researchpaper as (SELECT t.full_name,p.* from account t LEFT JOIN paper_details p on t.member_id=p.member_id);";
$sql2="SELECT    t.* from researchpaper t where version=(SELECT max(version)  as version from researchpaper as k where k.paper_id=t.paper_id GROUP by paper_id  ) order by t.date desc;";
$db1->query($sql1);
$result=$db1->query($sql2);
$count=1;
?>

<table class="table table-responsive table-sm table-hover" style="font-size:small">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">User Id</th>
                                        <th scope="col">Paper Id</th>
                                        <th scope="col">Catagory</th>
                                        <th scope="col">Paper Title</th>
                                        <th scope="col">Author</th>
                                        <th scope="col">SubAuthor</th>
                                        <th scope="col">Version</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Document</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                   while($r=$result->fetch_assoc()){

                                   
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $count++; ?></th>

                                       <td class="showpointer" onclick="profileviewer('<?php echo $r['member_id']; ?>')" > <span class="userprofview"  data-user="<?php echo $r['member_id']; ?>"> <?php echo $r['full_name'] ?></span></td>
                                       <td class="showpointer" onclick="profileviewer('<?php echo $r['member_id']; ?>')" > <span class="userprofview" data-user="<?php echo $r['member_id']; ?>"> <?php echo $r['member_id']; ?></span></td>
                                       <td><?php echo $r['paper_id']; ?></td>
                                       <td><?php echo $r['paper_catagory'] ?></td>
                                       <td><?php echo $r['paper_title']; ?></td>
                                   <td class="showpointer text-center" onclick="profileviewer('<?php echo $r['author']; ?>')" > <span  class="userprofview" data-user="<?php echo $r['author']; ?>"><?php echo $r['author']; ?></span></td>
                                      <?php if($r['sub_author']!='') {?>  <td class="showpointer" onclick="subprofileviewer('<?php echo $r['sub_author']; ?>')" ><button   class="badge badge-info subauthordata small" data-subauthorid="<?php echo $r['sub_author']; ?>">view </button> </td>
                                        <?php } 
                                   else{
                                       echo "<td></td>";
                                   }
                                   ?>
                                       <td class="text-center"><span class="badge badge-pill badge-primary"><?php echo $r['version']; ?></span></td>
                                       <td><?php echo $r['date']; ?></td>
                                       <td><a download="" href="<?php echo './uploads/document/'.$r['document']; ?>"> <?php echo $r['document']; ?></a></td>
                                   <?php if($r['version']>1) {?>   <td class="showpointer" onclick="paperviewer('<?php echo $r['paper_id']; ?>')" > <button class="badge badge-warning preversionshow" data-paperid="<?php echo $r['paper_id']; ?>">pre version</button>   </td>
                                   <?php  }?>  
                                                                 </tr>
   <?php 

                                }
                            }
                                ?>
                                </tbody>
                            </table>