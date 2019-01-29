<?php require('../controllers/session_controller.php'); if($_SESSION['emp_Privilege']!=1){header('Location: ../index.php');}?>
<?php require('../views/header.php');?>
<body class="animsition">
    <div class="page-wrapper">
        <div class="page-container p-l-0">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop" style="left: 0;">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="logo">
                                <a href="../guidance/dashboard.php">
                                    <img src="../images/logo-landscape.png" width="175" height="20" alt="PsychCare" />
                                </a>
                            </div>
                            <h2 id="maindesc">My Profile</h2>
                                <div class="header-button">
                                    <div class="noti-wrap">
                                        <div class="noti__item js-item-menu">
                                            <i class="zmdi zmdi-notifications"></i>
                                            <span class="quantity">3</span>
                                            <div class="notifi-dropdown js-dropdown">
                                                <div class="notifi__title">
                                                    <p>You have 3 Notifications</p>
                                                </div>
                                                <div class="notifi__item">
                                                    <div class="bg-c1 img-cir img-40">
                                                        <i class="zmdi zmdi-email-open"></i>
                                                    </div>
                                                    <div class="content">
                                                        <p>You got a email notification</p>
                                                        <span class="date">April 12, 2018 06:50</span>
                                                    </div>
                                                </div>
                                                <div class="notifi__item">
                                                    <div class="bg-c2 img-cir img-40">
                                                        <i class="zmdi zmdi-account-box"></i>
                                                    </div>
                                                    <div class="content">
                                                        <p>Your account has been blocked</p>
                                                        <span class="date">April 12, 2018 06:50</span>
                                                    </div>
                                                </div>
                                                <div class="notifi__item">
                                                    <div class="bg-c3 img-cir img-40">
                                                        <i class="zmdi zmdi-file-text"></i>
                                                    </div>
                                                    <div class="content">
                                                        <p>You got a new file</p>
                                                        <span class="date">April 12, 2018 06:50</span>
                                                    </div>
                                                </div>
                                                <div class="notifi__footer">
                                                    <a href="#">All notifications</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-wrap">
                                        <div class="account-item clearfix js-item-menu">
                                            <div class="image">
                                                <img src="../images/icon/avatar-01.jpg" alt="Admin-one" />
                                            </div>
                                            <div class="content">
                                                <a class="js-acc-btn" href="#"><?php echo $_SESSION['emp_FN']." ".$_SESSION['emp_LN'];?></a>
                                            </div>
                                            <div class="account-dropdown js-dropdown">
                                                <div class="info clearfix">
                                                    <div class="image">
                                                        <a href="#">
                                                            <img src="../images/icon/avatar-01.jpg" alt="Admin-one" />
                                                        </a>
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="name">
                                                            <a href="#"><?php echo $_SESSION['emp_FN']." ".$_SESSION['emp_LN'];?></a>
                                                        </h5>
                                                        <span class="email"><?php echo $_SESSION['emp_Email'];?></span>
                                                    </div>
                                                </div>
                                                <div class="account-dropdown__body">
                                                    <div class="account-dropdown__item">
                                                        <a href="../views/profile.php">
                                                            <i class="zmdi zmdi-account-circle"></i>My Profile</a>
                                                    </div>
                                                </div>
                                                <div class="account-dropdown__footer">
                                                    <a href="../views/logout.php">
                                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </header>
            <!--END HEADER DESKTOP-->
            <!-- MAIN CONTENT-->
            <div class="main-content p-t-100">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <center>
                                        <div class="card-body">
                                            <div class="profile-thumb p-t-15">
                                                <img src="../images/icon/avatar-01.jpg" alt="" class="rounded-circle">
                                            </div>
                                            <h3 class="text-center p-t-15">Admin Admin</h3>
                                            <h5 class="text-center p-t-10">admin@usc.edu.ph</h5>
                                            <hr>
                                            <div class="p-b-10 p-t-20">
                                                <button class="btn btn-lg btn-warning au-btn--block" data-toggle="modal" data-target="#changePass">
                                                    <span id="info_change">Change Password</span>
                                                </button>
                                            </div>
                                            <div class="p-b-60">
                                                <button class="btn btn-lg btn-danger au-btn--block" >
                                                    <span id="info_change">Delete Account</span>
                                                </button>
                                            </div>
                                        </div>
                                    </center>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Edit Personal Information</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post" novalidate="novalidate">
                                            <div class="form-group">
                                                <label for="fname" class="control-label mb-1">First Name</label> 
                                                <input id="fname" name="fname" type="text" class="form-control" value="<?php echo $_SESSION['emp_FN'];?>" aria-required>
                                            </div>
                                            <div class="form-group">
                                                <label for="lname" class="control-label mb-1">Last Name</label>
                                                <input id="lname" name="lname" type="text" class="form-control" value="<?php echo $_SESSION['emp_LN'];?>"  aria-required>
                                            </div>
                                            <div class="form-group">
                                                <label for="lname" class="control-label mb-1">Email</label>
                                                <input id="lname" name="lname" type="text" class="form-control" value="<?php echo $_SESSION['emp_Email'];?>" aria-required>
                                            </div>
                                            <div class="form-group choose-file">
                                                <input type="file" class="form-control-file d-inline" name="img" value="#" required>
                                            </div>
                                            <div>
                                                <a href="../views/profile.php?id=<?php echo $row['schedule_ID']?>">
                                                    <button class = "btn btn-lg btn-info au-btn--block" name="SaveButton" >Save Changes</button>
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COPYRIGHT-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright p-b-10">
                                    <p>Copyright © 2018 PsychCare. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                        <!-- END COPYRIGHT-->
                    </div>
                </div>
            </div>
            <!--END MAIN CONTENT-->
            <!--MODAL CHANGE PASSWORD-->
            <div class="modal fade" id="changePass" tabindex="-1" role="dialog" aria-labelledby="updateButton" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addButtonModal">Edit Password</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post" novalidate="novalidate">
                                <div class="form-group">
                                    <label for="fname" class="control-label mb-1">Current Password</label>
                                    <input id="fname" name="fname" type="text" class="form-control" aria-required>
                                </div>
                                <div class="form-group">
                                    <label for="lname" class="control-label mb-1">New Password</label>
                                    <input id="lname" name="lname" type="text" class="form-control" aria-required>
                                </div>
                                <div class="form-group">
                                    <label for="lname" class="control-label mb-1">Confirm New Password</label>
                                    <input id="lname" name="lname" type="text" class="form-control" aria-required>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="btnConfirmSched" class="btn au-btn--blue">Confirm</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        

        </div>
    </div>
</body>
<?php require('../views/footer.php');
?>