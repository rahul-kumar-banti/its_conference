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
                    <h4 class="modal-title">Information</h4>
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

    <section class="enduser">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 user-data">
                    <section class="admin-controls">
                        <div class="container-fluid">
                            <div class="row">

                                <div class="col-md-12 user-data">
                                    <?php include_once("./includes/profileviewer.php"); ?>
                                    <nav>
                                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#usermanage" role="tab" aria-controls="nav-home" aria-selected="true">User Management</a>
                                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"> Payment Details</a>
                                            <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#researchpaper" role="tab" aria-controls="nav-about" aria-selected="false">Research paper</a>
                                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#dspeakers" role="tab" aria-controls="nav-contact" aria-selected="false">Speakers</a>

                                        </div>
                                    </nav>
                                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                        <div class="tab-pane fade show active  personal-info " id="usermanage" role="tabpanel" aria-labelledby="nav-home-tab">

                                            <nav>
                                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#createuser" role="tab" aria-controls="nav-home" aria-selected="true">Create User</a>
                                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#deleteuser" role="tab" aria-controls="nav-profile" aria-selected="false">
                                                        Delete user</a>
                                                    <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#userdetails" role="tab" aria-controls="nav-about" aria-selected="false">
                                                        User Information</a>


                                                </div>
                                            </nav>

                                            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                                <div class="tab-pane fade show active  personal-info " id="createuser" role="tabpanel" aria-labelledby="nav-home-tab">
                                                    <div class="col-md-12">
                                                        <form>

                                                            <div class="form-row">
                                                                <div class="form-group col-md-4">
                                                                    <label for="fullname">Name</label>
                                                                    <input type="text" class="form-control" id="inputname" placeholder="enter full name">

                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label for="mobilenumber">Mobile Number</label>
                                                                    <input type="number" class="form-control" id="inputcontact" placeholder="Mobile number">
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label for="email">Email address</label>
                                                                    <input type="email" class="form-control" id="email" placeholder="email address" aria-describedby="inputGroupPrepend">

                                                                </div>
                                                            </div>
                                                            <div class="form-row">

                                                                <div class="form-group col-md-4">
                                                                    <label for="usertype">User Type</label>
                                                                    <select class="custom-select" required>
                                                                        <option value="">Select User</option>
                                                                        <option value="1">Admin</option>
                                                                        <option value="2">Reviewer</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label for="password"> Password</label>
                                                                    <input type="password" class="form-control" id="inputpassword" placeholder=" enter password">
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label for="password"> Re enter Password</label>
                                                                    <input type="password" class="form-control" id="inputpassword" placeholder="Re enter password">
                                                                </div>

                                                            </div>

                                                            <div class="form-row">
                                                                <div class="form-group col-md-4">
                                                                    <label for="organization">Organization Name</label>
                                                                    <input type="text" class="form-control" id="inputname" placeholder="enter full name">

                                                                </div>
                                                                <div class="form-group col-md-8">
                                                                    <label for="address">Addrerss</label>
                                                                    <textarea class="form-control" rows="1" id="comment"></textarea>
                                                                </div>
                                                            </div>


                                                            <button type="submit" class="btn btn-primary">Register</button>
                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="tab-pane fade research-info " id="deleteuser" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                    <form>

                                                        <div class="form-row">
                                                            <div class="form-group col-md-4">
                                                                <label for="fullname">User id</label>
                                                                <input type="text" class="form-control" id="inputname" placeholder="enter full name">

                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="email">Email address</label>
                                                                <input type="email" class="form-control" id="email" placeholder="email address" aria-describedby="inputGroupPrepend">
                                                            </div>



                                                        </div>
                                                        <div class="text-center">
                                                            <button type="submit" class="btn btn-primary text-center">Delete</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane fade" id="userdetails" role="tabpanel" aria-labelledby="nav-about-tab">
                                                    <form>

                                                        <div class="form-row">
                                                            <div class="form-group col-md-4">
                                                                <label for="fullname">Total Registered user</label>


                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <input type="text" id="totaluser">


                                                            </div>

                                                        </div>




                                                    </form>

                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Name</th>
                                                                <th scope="col">Mobile Number</th>
                                                                <th scope="col">User Type</th>
                                                                <th scope="col">Organization</th>

                                                                <th scope="col">State</th>
                                                                <th scope="col">Address</th>
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
                                                </div>



                                            </div>

                                        </div>

                                        <div class="tab-pane fade research-info " id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                            <nav>
                                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#paymentsuccess" role="tab" aria-controls="nav-home" aria-selected="true">
                                                        Payment Submitted
                                                    </a>
                                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#verifieduser" role="tab" aria-controls="nav-profile" aria-selected="false"> Verified Payment </a>
                                                    <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#paymentnotsubmitted" role="tab" aria-controls="nav-about" aria-selected="false">Payment Not
                                                        Submitted</a>

                                                </div>
                                            </nav>
                                            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                                <div class="tab-pane fade show active  personal-info " id="paymentsuccess" role="tabpanel" aria-labelledby="nav-home-tab">
                                                    <form>

                                                        <div class="form-row">
                                                            <div class="form-group col-md-4">
                                                                <label for="fullname">Total Payment Success user</label>


                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <input type="text" id="successuser">


                                                            </div>

                                                        </div>




                                                    </form>

                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">User Id</th>
                                                                <th scope="col">Name</th>


                                                                <th scope="col">Paper Id</th>
                                                                <th scope="col">Payment Mode</th>
                                                                <th scope="col">Transaction No.</th>
                                                                <th scope="col">Bank Name</th>
                                                                <th scope="col">Payment date</th>
                                                                <th scope="col">Amount</th>
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

                                                </div>
                                                <div class="tab-pane fade research-info " id="verifieduser" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                    <form>

                                                        <div class="form-row">
                                                            <div class="form-group col-md-4">
                                                                <label for="fullname">Total Verified user</label>


                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <input type="text" id="successuser">


                                                            </div>

                                                        </div>




                                                    </form>

                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">User Id</th>
                                                                <th scope="col">Name</th>


                                                                <th scope="col">Paper Id</th>

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



                                                </div>

                                                <div class="tab-pane fade" id="paymentnotsubmitted" role="tabpanel" aria-labelledby="nav-about-tab">
                                                    <form>

                                                        <div class="form-row">
                                                            <div class="form-group col-md-4">
                                                                <label for="fullname">Total payment Not Submitted user</label>


                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <input type="text" id="totaluser">


                                                            </div>

                                                        </div>




                                                    </form>

                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Name</th>
                                                                <th scope="col">Mobile Number</th>
                                                                <th scope="col">User Type</th>
                                                                <th scope="col">Paper Id</th>


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
                                                </div>
                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="researchpaper" role="tabpanel" aria-labelledby="nav-about-tab">





                                        </div>
                                        <div class="tab-pane fade" id="dspeakers" role="tabpanel" aria-labelledby="nav-contact-tab">
                                            <nav>
                                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#addspeaker" role="tab" aria-controls="nav-home" aria-selected="true">Add
                                                        Speakers</a>
                                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#viewspeakers" role="tab" aria-controls="nav-profile" aria-selected="false">View Speakers</a>
                                                    <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#updatespeaker" role="tab" aria-controls="nav-about" aria-selected="false">Update Speaker</a>


                                                </div>
                                            </nav>

                                            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                                <div class="tab-pane fade show active  personal-info " id="addspeaker" role="tabpanel" aria-labelledby="nav-home-tab">
                                                    <div class="container">
                                                        <form name="addspeakers">
                                                            <div class="form-row">
                                                                <div class="form-group col-md-4">
                                                                    <label>Name</label>
                                                                    <input type="text" class="form-control" id="inputname" placeholder="enter full name">

                                                                </div>

                                                                <div class="form-group col-md-4">
                                                                    <label>Organization</label>
                                                                    <input type="text" class="form-control" id="orgname" placeholder="organization name">

                                                                </div>
                                                            </div>

                                                            <div class="form-row">
                                                                <div class="form-group col-md-4">
                                                                    <label>Designation</label>
                                                                    <input type="text" class="form-control" id="desig">

                                                                </div>

                                                                <div class="form-group col-md-4">
                                                                    <label>Upload Image </label>
                                                                    <input type="file" name="pic" accept="image/*">


                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-4">
                                                                    <label>Description </label>
                                                                    <textarea rows="2"></textarea>

                                                                </div>


                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Upload</button>
                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="tab-pane fade research-info " id="viewspeakers" role="tabpanel" aria-labelledby="nav-profile-tab">


                                                    <table class="table" style="font-size:small">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Name</th>
                                                                <th scope="col">Speaker Id</th>
                                                                <th scope="col">Organization</th>
                                                                <th scope="col">Designation</th>
                                                                <th scope="col">Action</th>


                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Bootstr</td>
                                                                <td>Cristina</td>
                                                                <td>2.846</td>
                                                                <td>123</td>
                                                                <td>
                                                                    <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                                                                    <button type="button" class="btn btn-success"><i class="far fa-trash-alt"></i></button>

                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="tab-pane fade" id="updatespeaker" role="tabpanel" aria-labelledby="nav-about-tab">

                                                    <div class="container">
                                                        <form name="addspeakers">
                                                            <div class="form-row">
                                                                <div class="form-group col-md-4">
                                                                    <label>Speaker Id</label>
                                                                    <input type="text" class="form-control" id="inputname" placeholder="enter full name">

                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label>Name</label>
                                                                    <input type="text" class="form-control" id="inputname" placeholder="enter full name">

                                                                </div>

                                                                <div class="form-group col-md-4">
                                                                    <label>Organization</label>
                                                                    <input type="text" class="form-control" id="orgname" placeholder="organization name">

                                                                </div>
                                                            </div>

                                                            <div class="form-row">
                                                                <div class="form-group col-md-4">
                                                                    <label>Designation</label>
                                                                    <input type="text" class="form-control" id="desig">

                                                                </div>

                                                                <div class="form-group col-md-4">
                                                                    <label>Upload Image </label>
                                                                    <input type="file" name="pic" accept="image/*">


                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label>Description </label>
                                                                    <textarea rows="2"></textarea>

                                                                </div>
                                                            </div>

                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                        </form>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

            </div>

        </div>
    </section>
    <?php
    include_once("./includes/footer.php");
    ?>
    <script defer src="./js/researchpaper.js"></script>
    <script src="./js/user_dashboard.js"></script>