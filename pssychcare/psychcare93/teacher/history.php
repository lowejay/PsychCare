<?php require('../controllers/session_controller.php'); if($_SESSION['emp_Privilege']!=2){header('Location: ../index.php');}?>
<?php include('../controllers/teacher_controller.php');
$emp_ID = $_SESSION['emp_ID'];
$result = loadClassSched($emp_ID);
$student = loadClassStudent($emp_ID);?>

<?php require('../views/header.php');require('navbars.php');require('../views/alert.php');?>
<body class="animsition">
    <div class="page-wrapper">
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                                <h1 id="maindesc">History</h1>
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
                                            <img src="../images/icon/avatar-01.jpg" alt="Teacher-one" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION['emp_FN']." ".$_SESSION['emp_LN'];?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="../images/icon/avatar-01.jpg" alt="Teacher-one" />
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
                                                    <a href="profile.php">
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
    <!-- HEADER DESKTOP-->

    <!-- PSYCHOLOGICAL DISORDER -->
        <div class="main-content p-t-100">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive table-responsive-data2">
                                    <a href="../teacher/view.php?studentid=<?php echo $_GET['studentid']?>&classid=<?php echo $_GET['classid']?>" value="Back">
                                        <button class="au-btn au-btn-icon au-btn--orange au-btn--small">
                                            <i class="zmdi zmdi-arrow-left"></i>Back
                                        </button>
                                    </a>
                                        <br><br>
                                    <h2>PSYCHOLOGICAL DISORDER</h2>
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>date</th>
                                                <th>result</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td>12101582</td>
                                                <td>To dream of an abandoned house represents belief systems, ways of living, or relationships that have been discarded. It may also reflect abandoned ideas or a future you planned for yourself and gave up on. Decisions or lifestyle choices you are aware of yourself having purposely given up. 
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

        <!-- END PSYCHOLOGICAL DISORDER -->

        <!-- INTERPRETATION OF DREAMS -->
                            <div class="col-12 p-t-100">
                                <div class="table-responsive table-responsive-data2">
                                    <h2>INTERPRETATION OF DREAMS</h2>
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>date</th>
                                                <th>result</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td>12101582</td>
                                                <td>To dream of an abandoned house represents belief systems, ways of living, or relationships that have been discarded. It may also reflect abandoned ideas or a future you planned for yourself and gave up on. Decisions or lifestyle choices you are aware of yourself having purposely given up. 
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
        <!-- END INTERPRETATION OF DREAMS -->

        <!-- TYPES OF LEARNER -->
                            <div class="col-12 p-t-100">
                                <div class="table-responsive table-responsive-data2">
                                    <h2>TYPES OF LEARNER</h2>
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>date</th>
                                                <th>result</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td>12101582</td>
                                                <td>To dream of an abandoned house represents belief systems, ways of living, or relationships that have been discarded. It may also reflect abandoned ideas or a future you planned for yourself and gave up on. Decisions or lifestyle choices you are aware of yourself having purposely given up. 
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
        <!-- END TYPES OF LEARNER -->

        <!-- PERSONALITY TEST -->
                            <div class="col-12 p-t-100">
                                <div class="table-responsive table-responsive-data2">
                                    <h2>PERSONALITY TEST</h2>
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>date</th>
                                                <th>result</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td>12101582</td>
                                                <td>To dream of an abandoned house represents belief systems, ways of living, or relationships that have been discarded. It may also reflect abandoned ideas or a future you planned for yourself and gave up on. Decisions or lifestyle choices you are aware of yourself having purposely given up. 
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- END PERSONALITY TEST -->
</body>
<?php require('../views/footer.php');
?>