<!-- ============== 
message viewer
 ============= -->
<div class="modal fade" id="msgshowhomedilog" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h4 class="text-center alert alert-success msgonreg"></h4>
                <h4 class="text-center alert alert-danger msgonregerror"></h4>
            </div>

            <div class="modal-footer">
                <button type="button" id="btnmsgmodal" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- =======
login viewer
===============-->

<div class="modal login fade" id="login" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" style="padding:0px">
            <div class="modal-header">
                <h4 class="modal-title text-center">Login</h4>
                <button type="button" class="close" style="color:red" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body" style="padding-top:0px;padding-bottom:0px;">
                <div class="row" style="padding-top:0px;margin-top:0px;padding-bottom:0px;margin-bottom:0px">
                    <div class="col-lg-12">
                        <div class="card card-container" style="padding-top:0px;margin-top:0px;margin-bottom:0px">
                            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
                            <form class="form-signin" method="post" action="./process_login.php">
                                <span id="reauth-email" class="reauth-email"></span>
                                <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                                <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                                <div id="remember" class="checkbox">
                                    <label>
                                        <input type="checkbox" value="remember-me"> Remember me
                                    </label>
                                </div>

                                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
                                <button class="btn btn-lg btn-secondary lgtoreg btn-block btn-signin" type="reset">register</button>
                                <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#msgshowhome">Open Modal</button> -->

                            </form><!-- /form -->
                            <a href="./index.php#" class="forgot-password">
                                Forgot the password?
                            </a>
                        </div><!-- /card-container -->

                    </div>

                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<!-- ======
registration viewer
============== -->
<div class="modal reg fade" id="registration" role="dialog" style="top:-15% !important">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="padding:0px;margin:0px">
            <div class="modal-header">
                <h4 class="modal-title">registration</h4>
                <button type="button " class="close alert-danger" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body" style="padding:0px;margin:0px">
                <div class="row" style="padding:0px;margin:0px">
                    <div class="col-lg-4">

                        <div class="bg-white regwarn">
                            <h6 class=" small  text-danger"><i class="fa fa-star fa-1x text-danger"></i>password between 8 to 16 characters</h6>
                            <h6 class=" small  text-danger"><i class="fa fa-star fa-1x text-danger"></i>Password must contain only characters, numeric digits, underscore </h6>
                            <h6 class=" small  text-danger"><i class="fa fa-star fa-1x text-danger"></i>in password first character must be a letter</h6>


                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card bg-light" style="padding:0px;margin:0px">

                            <article class="card-body mx-auto">
                                <h4 class="card-title mt-3 text-center">Create Account</h4>

                                <form method="POST" name="registration" action="./process_regemp.php" autocomplete="off">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group input-group">

                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                </div>
                                                <input autocomplete="off" name="name" class="form-control" placeholder="Full name" type="text" id="fullname" required>
                                                <div class="invalid-feedback emsg small">
                                                    please enter name correctly.minumum 5 character is required
                                                </div>
                                            </div>
                                            <div class="form-group input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                                                </div>
                                                <input name="mobile_no" autocomplete="off" class="form-control" placeholder="Phone number" type="number" maxlength="12" minlength="10" required id="mobilenum1">
                                                <div class="invalid-feedback emsg small">
                                                    please enter correct mobile number
                                                </div>
                                            </div>
                                            <div class="form-group input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="fa fa-globe"></i> </span>
                                                </div>
                                                <input name="country" class="form-control" placeholder="country" type="text" maxlength="20" minlength="2" id="countryname" required>
                                                <div class="invalid-feedback emsg small">
                                                    please enter country name correctly
                                                </div>
                                            </div>
                                            <!-- form-group// -->
                                            <!-- form-group// -->
                                            <!-- pass -->
                                            <div class="form-group input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                                </div>
                                                <input name="pass" autocomplete="off" class="form-control" placeholder="Create password" type="password" id="password123" required>
                                                <div class="invalid-feedback emsg">
                                                    please follow specified password pattern
                                                </div>
                                            </div>
                                            <div class="form-group input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                                </div>
                                                <input class="form-control" autocomplete="off" placeholder="Repeat password" type="password" id="repassword123" required>
                                                <div class="invalid-feedback emsg">
                                                    Password not match
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                                                </div>
                                                <input name="email" id="reg-email" class="form-control" placeholder="Email address" type="email" required>
                                                <div class="invalid-feedback emsg emailerror">

                                                </div>
                                            </div>
                                            <div class="form-group input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                                                </div>
                                                <select name="category" class="form-control" required id="catagory1">
                                                    <option value="default" selected=""> Select catagory</option>
                                                    <option value="Research scholar">Research Scholar</option>
                                                    <option value="full time student">Full Time Student</option>
                                                    <option value="faculty">Faculty</option>
                                                    <option value="industry represntative">Industry Represntative</option>
                                                </select>
                                                <div class="invalid-feedback emsg">
                                                    Please select catagory
                                                </div>
                                            </div>
                                            <div class="form-group input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="fa fa-home"></i> </span>
                                                </div>
                                                <input name="state" class="form-control" placeholder="state" type="text" required id="state">
                                                <div class="invalid-feedback emsg">
                                                    please enter state correctly
                                                </div>
                                            </div>


                                            <!-- form-group// -->
                                            <div class="form-group input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="fa fa-user-circle"></i> </span>
                                                </div>
                                                <input name="author" class="form-control" placeholder="Organization" type="text" maxlength="50" minlength="4" id="orgname">
                                                <div class="invalid-feedback emsg">
                                                    please enter organization name correctly
                                                </div>
                                            </div>
                                            <!-- form-group// -->
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <textarea name="address" rows="2" placeholder="address" class="form-control" required id="address1"></textarea>
                                        <div class="invalid-feedback emsg">
                                            please enter address correctly
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block"> Create Account </button>
                                    </div>

                                    <button class="btn btn-lg btn-secondary regtologin btn-block btn-signin" type="reset">login</button>


                                </form>
                            </article>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- ============== -->
<div class="row banner fixed-top">
    <div class="col-md-12"><img src="./assets/images/banner.jpg" style="width: 100%" alt=""></div>
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark ">

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav nav-menu">
                            <li class="nav-item menu-active">
                                <a href="./index.php#intro" class="nav-link text-white"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                            </li>
                            <li class="nav-item ">
                                <a href="#about1" class="nav-link js-scroll-trigger text-white">About Event</a>
                            </li>
                            <li class="nav-item dropdown text-white">
                                <a class="nav-link dropdown-toggle text-white" href="#" id="navbardrop" data-toggle="dropdown">
                                    About I.T.S.
                                </a>
                                <div class="dropdown-menu" style="background: black ">

                                    <a href="./index.php#ITS">I.T.S. Group</a><br>
                                    <a href="./index.php#ITSI">I.T.S. Institute</a><br>


                                </div>
                            </li>


                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white" href="#" id="navbardrop" data-toggle="dropdown">
                                    <i class="fa fa-book" aria-hidden="true"></i> Guideline
                                </a>
                                <div class="dropdown-menu" style="background: black ">

                                    <a href="./index.php#guidelines">Call for paper</a><br>
                                    <a href="./index.php#paper_submission">Paper Submission Process</a><br>
                                    <a href="./index.php#fees">Registration Fees Details</a><br>
                                    <a href="./index.php#paymentdetails">Payment Details</a><br>



                                </div>
                            </li>
                            <li class="nav-item"> <a href="./index.php#committee" class="nav-link text-white"><i class="fa fa-users" aria-hidden="true"></i> Committee</a></li>
                            <li class="nav-item"><a href="./index.php#gallery" class="nav-link text-white"> <i class="fa fa-file-image-o" aria-hidden="true"></i> Gallery</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white" href="#" id="navbardrop" data-toggle="dropdown">
                                    <i class="fa fa-download" aria-hidden="true"></i> Downloads
                                </a>
                                <div class="dropdown-menu" style="background: black ">
                                    <a href="./assets/download/Registration_Form.docx" download class="js-scroll-trigger"> Registration
                                        Form</a> <br>
                                    <a href="#" download class="js-scroll-trigger"> Brochure
                                    </a> <br>
                                    <a href="#events" class="js-scroll-trigger">Schedule</a><br>
                                    <a href="./assets/download/Guidelines for Authors (2).pdf" download="Guidelines" class="js-scroll-trigger">Guidelines for Author</a><br>
                                    <a href="./assets/download/Conference-template.doc" download="Conference_Template" class="js-scroll-trigger">Conference Template</a><br>
                                    <a href="./assets/download/Payment_Details.pdf" download="payment" class="js-scroll-trigger">Payment
                                        Details</a><br>
                                    <a href="./assets/download/Copyright_Form.pdf" download class="js-scroll-trigger">Copyright
                                        Form</a><br>


                                </div>
                            </li>
                            <li class="nav-item"><a href="./index.php#contact" class="nav-link text-white"><i class="fa fa-address-book" aria-hidden="true"></i> Contact Us</a></li>
                            <?php
                            if ($login) {
                                $dashboard_addr = $_SESSION["type"] == "user" ? "user_dashboard.php" : "admin_dashboard.php";
                            ?>


                                <li class="nav-item ">
                                    <a href="<?php echo $dashboard_addr; ?>" class="nav-link text-white"><i class="fa fa-cog" aria-hidden="true"></i> Dashboard</a>
                                </li>
                                <li class="nav-item pull-right">
                                    <a class="btn  btn-lg-sn lgbtn-out " href="./logout.php" class="nav-link text-white"><i class="fa fa-sign-out" aria-hidden="true"></i> logout</a>
                                </li>
                            <?php
                            } else {


                            ?>
                                <li class="nav-item pull-right">
                                    <!-- <button class="btn  btn-lg-sn lgbtn" class="nav-link text-white"><i class="fa fa-sign-in" aria-hidden="true"></i> login</button> -->
                                    <button type="button" class="btn btn-info btn-lg lgbtn nav-link text-white" data-toggle="modal" data-target="#login"><i class="fa fa-sign-in" aria-hidden="true"></i>login</button>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </nav>



             
            </div>
        </div>
    </div>


</div>