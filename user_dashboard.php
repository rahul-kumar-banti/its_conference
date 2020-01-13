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
  <?php
  include_once("./includes/css-lib.php");
  ?>
</head>

<body>
<div class="modal fade" id="paymentmodal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Payment</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         
        </div>
        <div class="modal-body">
        <section id="payment-details" style="margin:4%">
    <h3 class="text-center">Payment Details</h3>
    <form id="paymentsub" action="" method="post" onsubmit="return false;">
        <div class="row">
            <div class="col-md-4">
                    <div class="form-group">
                            
                            <div class="paperidforpay"></div>
                            <div class="text-dark bg-light pidshow"></div>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                          </div>
            </div>
            <div class="col-md-4">
                    <div class="form-group">
                            <label for="sel1">Select list:</label>
                            <select class="form-control" id="payment_mode">
                              <option value="Demand Draft">Demand Draft</option>
                              <option value="NEFT">NEFT</option>
                              
                            </select>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                          </div>
                          </div>
            
            <div class="col-md-4">
                    <div class="form-group">
                            <label for="uname">Amount</label>
                            <input type="text" class="form-control" id="amount"   required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                          </div>

            </div>
        </div>
        <div class="row">
                <div class="col-md-4">
                        <div class="form-group">
                                <label for="uname">DD/NEFT-No.</label>
                                <input type="text" class="form-control" id="payment_number"   required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                              </div>
                </div>
                <div class="col-md-4">
                        <div class="form-group">
                                <label for="uname">Bank Name</label>
                                <input type="text" class="form-control" id="Bank_Name"   required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                              </div>
                              </div>
                
                <div class="col-md-4">
                        <div class="form-group">
                                <label for="uname">Transaction date </label>
                                <input type="date" class="form-control" id="trans-date"   required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                              </div>
    
                </div>
            </div>
   
            <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block paymentsubmit"> Submit </button>
                  </div> <!-- form-group// -->
    </form>
    </section>
    <div class="successmsgforpayment" style="display:none">

    </div>
        </div>
        <div class="modal-footer">
          <div id="errormsgforpayment" class="pull-left"></div>
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
  <div class="row">
    <div class="col-md-12">


    </div>
  </div>
  <section class="enduser">
    <div class="container-fluid">
      <div class="row">
        
        <div class="col-md-12 user-data">
          <?php include_once("./includes/profileviewer.php"); ?>
          <nav>
            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-profile-tab" data-toggle="tab" href="#nav-profile-view" role="tab" aria-controls="nav-home" aria-selected="true">Personal Information</a>
              <a class="nav-item nav-link" id="nav-docupload-tab" data-toggle="tab" href="#docupload" role="tab" aria-controls="nav-profile" aria-selected="false"> Research Paper</a>
              <a class="nav-item nav-link" id="nav-docupdate-tab" data-toggle="tab" href="#docupdate" role="tab" aria-controls="nav-about" aria-selected="false">Submit Next Version</a>
              <a class="nav-item nav-link" id="nav-docview-tab" data-toggle="tab" href="#docview" role="tab" aria-controls="nav-contact" aria-selected="false">View Papers</a>

            </div>
          </nav>
          <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
            <div class="tab-pane fade show active  " id="nav-profile-view" role="tabpanel" aria-labelledby="nav-profile-tab">
              <div class="row">
                <div class="col-md-12">
                  <div class="profileinfo"  style="padding-left:10%;padding-top:2%;">
                    <h6 class="mx-auto  font-weight-bold"> <i class="fa fa-user" aria-hidden="true"></i><span class="text-primary">Full Name:</span><span class="text-capitalize text-secondary"> <?php echo $row["full_name"] ?></span></h6>
                    <h6 class="mx-auto  font-weight-bold"> <i class="fa fa-envelope" aria-hidden="true"></i><span class="text-primary">Email:</span><span class="text-capitalize text-secondary"> <?php echo $row["email"] ?></span></h6>
                    <h6 class="mx-auto  font-weight-bold"> <i class="fa fa-phone" aria-hidden="true"></i><span class="text-primary">Mobile no:</span><span class="text-capitalize text-secondary"> <?php echo $row["moble_no"] ?></span></h6>
                    <h6 class="mx-auto  font-weight-bold"> <i class="fa fa-list-alt" aria-hidden="true"></i><span class="text-primary">Catagory:</span><span class="text-capitalize text-secondary"> <?php echo $row["category"] ?></span></h6>
                    <h6 class="mx-auto  font-weight-bold"> <i class="fa fa-building-o" aria-hidden="true"></i><span class="text-primary">Organization:</span><span class="text-capitalize text-secondary"> <?php echo $row["organization"] ?></span></h6>
                    <h6 class="mx-auto  font-weight-bold"> <i class="fa fa-globe" aria-hidden="true"></i><span class="text-primary">Country:</span><span class="text-capitalize text-secondary"> <?php echo $row["country"] ?></span></h6>
                    <h6 class="mx-auto  font-weight-bold"> <i class="fas fa-city" aria-hidden="true"></i><span class="text-primary">State:</span><span class="text-capitalize text-secondary"> <?php echo $row["state"] ?></span></h6>
                    <h6 class="mx-auto  font-weight-bold"> <i class="fa fa-home" aria-hidden="true"></i><span class="text-primary">Address:</span><span class="text-capitalize text-secondary"> <?php echo $row["address"] ?></span></h6>
                    <button class="btn btn-primary editprofilebtn">Edit profile</button>
                    <!-- <button onclick="javascript:print()">print</button> -->
                  </div>


                </div>


              </div>

              <div class="editprofileform" style="display:none">
                <form action="updateprofile.php" method="post">
                  <div class="row mx-auto ">

                    <div class="col-sm-4 col-md-4 col-xs-12">
                      <label for="firstName"> Name</label>
                      <input type="text" name="fullname" class="form-control" value="<?php echo $row['full_name'] ?>" id="firstName" placeholder="First Name">

                    </div>
                    <div class="col-sm-4 col-md-4 col-xs-12">

                      <label for="email">Email address</label>
                      <input type="email" name="email" class="form-control" id="email" value="<?php echo  $row['email'] ?>" placeholder="email address" aria-describedby="inputGroupPrepend">


                    </div>
                    <div class="col-sm-4 col-md-4 col-xs-12">
                      <label for="phonenumber">Mobile Number</label>
                      <input type="tel" name="mobile" pattern="^\d{10}$" class="form-control" value="<?php echo $row['moble_no'] ?>" id="phonenumber" placeholder="Mobile Number" aria-describedby="inputGroupPrepend">

                    </div>

                  </div>
                  <div class="row mx-auto">
                    <div class="col-sm-4 col-md-4 col-xs-12">
                      <label for="firstName"> Catagory </label>
                      <select name="category" class="form-control" required>
                        <option selected="" value="<?php echo $row['category']; ?>"> <?php echo $row['category']; ?></option>
                        <option value="Research scholar">Research scholar</option>
                        <option value="full time student">full time student</option>
                        <option value="faculty">faculty</option>
                        <option value="industry represntative">industry represntative</option>
                      </select>

                    </div>
                    <div class="col-sm-4 col-md-4 col-xs-12">

                      <label for="firstName"> Country </label>
                      <input type="text" name="country" value="<?php echo $row['country']; ?>" class="form-control" id="country" placeholder="country">


                    </div>
                    <div class="col-sm-4 col-md-4 col-xs-12">
                      <label for="firstName"> State </label>
                      <input type="text" name="state" value="<?php echo $row['state']; ?>" class="form-control" id="State" placeholder="state">
                    </div>

                  </div>
                  <div class="row mx-auto">
                    <div class="col-sm-4 col-md-4 col-xs-12">

                      <label for="Organization"> Organization </label>
                      <input type="text" name="organization" value="<?php echo $row['organization']; ?>" class="form-control" id="Organization" placeholder="organization">


                    </div>
                    <div class="col-sm-4 col-md-4 col-xs-12">

                      <label for="member_id"> Member id </label>
                      <input type="text" name="member_id" value="<?php echo $row['member_id']; ?>" class="form-control" id="member_id" disabled>
                      <input type="text" name="member_id" value="<?php echo $row['member_id']; ?>" class="form-control" id="member_id" style="display:none">


                    </div>
                  </div>
                  <div class="row mx-auto">
                    <div class="col-sm-4 col-md-12 col-xs-12">
                      <label for="firstName"> Address</label>
                      <textarea class="form-control" name="address" value="<?php echo $row['address'] ?>" rows="2" id="comment"><?php echo $row['address'] ?></textarea>

                    </div>


                  </div>
                  <div class="row mx-auto">
                    <div class="col">
                      <button type="submit" class="btn btn-primary">
                        Update
                      </button>
                    </div>

                  </div>
                </form>
              </div>

            </div>

            <div class="tab-pane fade" id="docupload" role="tabpanel" aria-labelledby="nav-docupload-tab">
              <form action="./uploadpaper.php" enctype="multipart/form-data" name="documentform" method="post" onsubmit="return documentupload(this);">
                <div class="row">
                  <div class="col-md-8">
                    <div class="row mx-auto">
                      <div class="col-sm-6 col-md-6 col-xs-12">
                        <label for="branch">Paper Title </label>
                        <input type="text" name="paper_title" pattern="([A-za-z]+[0-9]*[\s]*[0-9]*[\s]*)*" maxlength="200" minlength="10" class="form-control" id="paper_title" placeholder="title of paper" required>

                      </div>
                      <div class="col-sm-6 col-md-6 col-xs-12">

                        <label for="paper-title">paper catagory</label>
                        <select class="custom-select" name="catagory" id="catagory" required>
                          <option value="">Select catagory</option>
                          <option value="ICT">ICT</option>
                          <option value="E Governance">E Governance</option>
                          <option value="Artificial Neural Networks">Artificial Neural Networks</option>
                          <option value="Mobile computing">Mobile computing</option>
                          <option value="Soft Computing">Soft Computing</option>
                          <option value="Knowledge Management">Knowledge Management</option>
                          <option value="Bio Informatics">Bio Informatics</option>
                          <option value="Software Engineering	">Software Engineering </option>
                          <option value="Agile Computing">Agile Computing</option>
                          <option value="Expert Systems">Expert Systems</option>
                          <option value="Image Processing">Image Processing</option>
                          <option value="ICT in Nation Building">ICT in Nation Building</option>
                          <option value="E-Commerce	">E-Commerce </option>
                          <option value="ERP and CRM">ERP and CRM</option>
                          <option value="Knowledge Mining">Knowledge Mining</option>
                          <option value="Robotics">Robotics</option>
                          <option value="Signal Processing">Signal Processing </option>
                          <option value="Systems Modelling">Systems Modelling</option>
                          <option value="Web Mining">Web Mining</option>
                          <option value="Cloud Computing	">Cloud Computing </option>
                          <option value="Autonomic Computing">Autonomic Computing</option>
                          <option value="Grid Computing">Grid Computing</option>
                          <option value="Ubiquitous Computing">Ubiquitous Computing</option>
                          <option value="Data Science">Data Science</option>
                          <option value="IoT">IoT</option>
                          <option value="Green Computing">Green Computing</option>
                          <option value="Recent Trends in Databases and Future Directions">Recent Trends in Databases and Future Directions</option>
                          <option value="IT & its Impact on core business Functions">IT & its Impact on core business Functions</option>
                          <option value="IT in Business Soluctions	">IT in Business Soluctions </option>
                          <option value="Innovation & Entrepreneur">Innovation & Entrepreneur</option>
                          <option value="Data Mining and Business Intelligence">Data Mining and Business Intelligence</option>
                          <option value="Any real life aspects of communication technologies">Any real life aspects of communication technologies</option>
                          <option value="Knowledge discovery">Knowledge discovery</option>

                        </select>

                      </div>


                    </div>
                    <div class="row mx-auto">
                      <div class="col-sm-6 col-md-6 col-xs-12">
                        <label for="firstName"> Author ID </label>
                        <input type="text" name="autherid" data-valied="true" class="form-control author" id="author" value="<?php echo $id; ?>" placeholder="author id" required>
                        <div class="text-success text-center text-danger   authorname "></div>
                      </div>
                      <div class="col-sm-6 col-md-6 col-xs-12">
                        <label for="subauthor"> Sub-Author Id</label>
                        <div class="form-group input-group">
                          <button class="btn btn-info add-input-subauthor " type="button">Add sub-Author</button>
                          <!-- <input type="text" class="form-control sub-author" data-valied="true" id="subauthor" placeholder="sub author id"> -->
                          <div class="input-group-append add-input-subauthor " style="cursor:pointer">
                            <span class="input-group-text"> <i class="fa fa-plus-circle text-success" aria-hidden="true"></i> </span>
                          </div>
                        </div>
                        <div class="text-success text-center text-danger   sub-authorname "></div>
                      </div>
                    </div>
                    <div class="row mx-auto subauthor-sec">
                    </div>
                    <div class="row mx-auto">
                      <div class="col-sm-6 col-md-6 col-xs-12">
                        <label for="file">select documnets:</label>
                        <div class="form-group  input-group">
                          <input type="file" name="documentfile" id="document" class="form-control  " accept=".pdf,.docx,.doc" require>
                        </div>
                        <div class="errormsgviewer"></div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>

                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="">
                      <h6 class="text-danger small"><i class="fa fa-star fa-1x text-danger"></i>Paper title should be start with Alphabate and minimum 20 and maximum 200 character is allowed .<br> No special character is allowed</h6>
                      <h6 class="text-danger small"><i class="fa fa-star fa-1x text-danger"></i> Author and sub Author should be pre-registered</h6>
                      <h6 class="text-danger small"><i class="fa fa-star fa-1x text-danger"></i>Duplicate Author or sub-Author ID not allowed</h6>
                      <h6 class="text-danger small"><i class="fa fa-star fa-1x text-danger"></i>Only Docx, doc or pdf file is allowed and size is not more then 10MB</h6>

                    </div>
                  </div>
                </div>
              </form>
              <div class="row mx-auto ">
                <div class="payoption" >
                  <!-- style="display:none" -->
                  
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="docupdate" role="tabpanel" aria-labelledby="nav-docupdate-tab">
             
            <form action="" onsubmit="return false;"  name="updateform">
                <div class="row" style="margin:1%">

                  <div class="col-md-4 paperidselectmenu updatedpaperforsubmit">
                    
                  </div>
                  <div class="col-md-4">
                    <label>choose file</label>
                    <div class="custom-file">

                      <input type="file" class="form-control upstedfile" id="customFile" accept=".pdf,.docx,.doc">
                      <!-- <label class="custom-file-label" for="customFile">Upload Research Paper</label> -->
                    </div>
                  </div>
                  <div class="col-md-4">
                  
                  <button  type="submit" class="btn btn-primary " style="margin-top:13%">update</button></div>

                </div>
              </form>
              <div class="row">
                <div class="col-md-12">
                <div class="errormsgviewerup text-center"></div>
                <div class="col-md-4">
                    <div class="">
                      <h6 class="text-danger small font-weight-bold"><i class="fa fa-star fa-1x text-danger"></i>chose paper id for update .<br> for paper id you can refer vew section</h6>
                      <h6 class="text-danger small font-weight-bold"><i class="fa fa-star fa-1x text-danger"></i>Only Docx, doc or pdf file is allowed and size is not more then 10MB</h6>

                    </div>
                </div>
              </div>
            </div>
            </div>
            <div class="tab-pane fade" id="docview" role="tabpanel" aria-labelledby="nav-docview-tab">
              <div class="table-responsive small paperlistview" id="section-to-print">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">PaperId</th>
                      <th scope="col">Paper Title</th>
                      <th scope="col">catagory</th>
                      <th scope="col">Date</th>
                      <th scope="col">version</th>
                      <th scope="col">document</th>
                      <th scope="col">Payment Status</th>
                    </tr>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>IOT</td>
                      <td>nn</td>
                      <td>nmb</td>
                      <td>chcb</td>
                      <td>20-10-2019</td>
                      <td>received</td>
                    </tr>
                  </tbody>

                  </thead>
                </table>
                  
              </div>
              <!-- <button class="btn btn-primary" onclick="javascript:print()">Print</button> -->
            </div>
          </div>
        

      </div>

    </div>

    </div>
  </section>
  <?php
  include_once("./includes/footer.php");
  ?>
  <script src="./js/user_dashboard.js"></script>