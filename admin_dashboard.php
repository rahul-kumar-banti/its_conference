<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include_once('./includes/config.php');
$login = false;
if (isset($_SESSION["id"])) {
    $login = true;
    $id = $_SESSION['id'];
    if ($_SESSION['type'] = "user") {
        $q = "SELECT * FROM account WHERE member_id= '$id'";
        //echo $q;
        $result = mysqli_query($db1, $q);
        $row = mysqli_fetch_array($result);
        $_SESSION['full_name'] = $row['full_name'];
        $_SESSION['email'] = $row['email'];
        if ($row["photo"] == 'default.jpg' || $row["photo"] == "") {
            $_SESSION['photo'] = "./assets/images/dummyperson.jpg";
        } else {
            $_SESSION['photo'] = "./uploads/images/" . $row["photo"];
        }
    } elseif ($_SESSION['type'] = "admin") {
        header('location:./admin_dashboard.php');
    } else {
        header("location:index.php?msg=login");
    }
} else {
    header("location:index.php?msg=login");
}

?>

<head>
    <meta charset="utf-8">
    <title>I.T.S - National Conference 2020</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="stylesheet" href="./css/user_dashboard.css">
    <link rel="stylesheet" href="./css/admin.css">


    <?php
    include_once("./includes/css-lib.php");
    ?>
</head>

<body>
    <div class="modal fade" id="userinfomodal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title title-model">Information</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
                    <div class="userprofileviwermodal">

                    </div>

                </div>
                <div class="modal-footer">
                    <div id="errormsgforuserinfo" class="pull-left"></div>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php
    include_once("./includes/header.php");
    ?>
    <div class="modal fade" id="changeimg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title" id="myModalLabel">Change or upload your profile image</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="./upload.php?type=profile" enctype="multipart/form-data">
                        <div class="form-group form-inline">
                            <label for="file" class="control-label">Select your photo:</label>
                            <input type=file name="file" id="file" class="form-control">
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" id="submit" name="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <section class="admin-controls enduser">

        <div class="row">

            <div class="col-md-12 user-data">
                <?php include_once("./includes/profileviewer.php"); ?>
                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#usermanage" role="tab" aria-controls="nav-home" aria-selected="true">User Management</a>
                        <a class="nav-item nav-link" id="nav-payment-tab" data-toggle="tab" href="#nav-payment" role="tab" aria-controls="nav-profile" aria-selected="false"> Payment Details</a>
                        <a class="nav-item nav-link" id="nav-research-tab" data-toggle="tab" href="#researchpaper" role="tab" aria-controls="nav-about" aria-selected="false">Research paper</a>
                        <a class="nav-item nav-link" id="nav-speaker-tab" data-toggle="tab" href="#dspeakers" role="tab" aria-controls="nav-contact" aria-selected="false">Speakers</a>

                    </div>
                </nav>
                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                <div class="tab-pane fade show active  personal-info " id="usermanage" role="tabpanel" aria-labelledby="nav-home-tab">
                    hello
                </div>
                <div class="tab-pane fade show   payment-info " id="nav-payment" role="tabpanel" aria-labelledby="nav-payment-tab">
                <div class="paymentinfosection">
                            <div class="row">
                                <div class="col-md-8"></div>
                                <div class="col-md-3">
                                    <div class="input-group"> <label for="paymentfilter" class="filterlabel  input-group-prepend bg-primary">Filter</label><select name="paymentfilter" id="paymentfilter" class="input form-control">
                                            <option value="4">All</option>
                                            <option value="3">unpaid</option>
                                            <option value="0">unverified</option>
                                            <option value="1">Verified</option>
                                            <option value="2">rejected</option>
                                        </select></div>
                                </div>
                            </div>
                            <div class="payment-details-show">
                            </div>
                </div>
                </div>
                <div class="tab-pane fade show   research-info " id="researchpaper" role="tabpanel" aria-labelledby="nav-research-tab">
                    hh
                </div>
                <div class="tab-pane fade show   speaker-info " id="dspeakers" role="tabpanel" aria-labelledby="nav-speaker-tab">
                    hi
                </div>
                
                </div>



            </div>



        </div>
    </section>
    <?php
    include_once("./includes/footer.php");
    ?>
    <script defer src="./js/researchpaper.js"></script>
    <script defer src="./js/paymentservice.js"></script>
    <script src="./js/user_dashboard.js"></script>