<?php
include_once("../includes/config.php");
$sql1="CREATE or REPLACE VIEW researchpaper as (SELECT t.full_name,p.* from account t LEFT JOIN paper_details p on t.member_id=p.member_id);";
$sql2="SELECT    t.* from researchpaper t where version=(SELECT max(version)  as version from researchpaper as k where k.paper_id=t.paper_id GROUP by paper_id  );";
?>

<table class="table" style="font-size:small">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">User Id</th>
                                        <th scope="col">Paper Catagory</th>
                                        <th scope="col">Paper Title</th>
                                        <th scope="col">Author</th>
                                        <th scope="col">Sub Author</th>
                                        <th scope="col">No. Of Version</th>
                                        <th scope="col">Organization</th>
                                        <th scope="col">Document Name</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>

                                </tbody>
                            </table>