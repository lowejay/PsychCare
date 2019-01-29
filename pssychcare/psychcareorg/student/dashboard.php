<?php require('../controllers/session_controller.php'); if(!$_SESSION['student_ID']){header('Location: ../index.php');}?>
<?php require('../views/header.php');?>
<body class="animsition">
    <div class="page-wrapper">
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                                <h2 id="maindesc">Home</h2>
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
                                            <img src="../images/icon/avatar-02.jpg" alt="Student-one" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION['student_FN']." ".$_SESSION['student_LN'];?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="../images/icon/avatar-02.jpg" alt="Student-one" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $_SESSION['student_FN']." ".$_SESSION['student_LN'];?></a>
                                                    </h5>
                                                    <span class="email"><?php echo $_SESSION['student_Email'];?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="student-profile.php">
                                                        <i class="zmdi zmdi-account-circle"></i>student Profile</a>
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
            <!-- HEADER DESKTOP-->
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Categories</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                 <i class="fas fa-cloud"></i>
                                            </div>
                                            <div class="text">
                                                <h2>1,368</h2>
                                                <span>Interpretation of Dreams</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="fas fa-lightbulb-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>8,688</h2>
                                                <span>Kinds of Learner</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                               <i class="zmdi zmdi-face"></i>
                                            </div>
                                            <div class="text">
                                                <h2>1,086</h2>
                                                <span>Personality Test</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                              <i class="fas fa-code-branch"></i>
                                            </div>
                                            <div class="text">
                                                <h2>1,060</h2>
                                                <span>Psychological Disorder</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <!-- PENDING APPOINTMENT-->
                        <div class="row">
                            <div id="myAppointment"class="col-lg-9">
                                <h2 class="title-1 m-b-20">My Appointment</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>ID Number</th>
                                                <th>Date</th>
                                                <th>Result</th>
                                            </tr>
                                            <tbody>
                                            <tr>
                                                <td>12101582</td>
                                                <td>07/09/2018</td>
                                                <td> Lorem Ipsum... </td>
                                            </tr>
                                            
                                        </tbody>
                                        <tbody>
                                            <tr>
                                                <td>12101582</td>
                                                <td>07/09/2018</td>
                                                <td> Lorem Ipsum... </td>
                                            </tr>
                                            
                                        </tbody>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <!--END OF PENDING APPOINTMENT-->
                        <!-- HISTORY-->
                        <div class="row">
                            <div class="col-lg-9">
                                <h2 class="title-1 m-b-20">History</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>ID Number</th>
                                                <th>Date</th>
                                                <th>Result</th>
                                            </tr>
                                            <tbody>
                                            <tr>
                                                <td>12101582</td>
                                                <td>07/09/2018</td>
                                                <td> Lorem Ipsum... </td>
                                            </tr>
                                            
                                        </tbody>
                                        <tbody>
                                            <tr>
                                                <td>12101582</td>
                                                <td>07/09/2018</td>
                                                <td> Lorem Ipsum... </td>
                                            </tr>
                                            
                                        </tbody>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--END OF HISTORY-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 PsychCare. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </div>
     </div>
 </div>
</div>
</div>
</body> 
<?php require('../views/footer.php');
?>