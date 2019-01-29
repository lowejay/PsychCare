    <?php require('../controllers/session_controller.php'); if($_SESSION['emp_Privilege']!=3){header('Location: ../index.php');}?>
<?php include('../controllers/admin_controller.php');?>
<?php require('../views/header.php');?>
<?php require('../views/alert.php');?>
<body class="animsition">
    <div class="page-wrapper">
        <div class="page-container p-l-0">
            <header class="header-desktop" style="left: 0;"><!-- HEADER DESKTOP-->
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="logo">
                                <a href="dashboard.php">
                                    <img src="../images/logo-landscape.png" width="175" height="20" alt="PsychCare" />
                                </a>
                            </div>
                            <div class="header-button">
                                <div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="../images/icon/avatar-01.jpg" alt="Admin-one" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION['emp_FN']?></a>
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
            </header><!--END HEADER DESKTOP-->
            <div class="main-content p-t-100"><!--MAIN CONTENT-->
                <div class="section__content section__content--p30">
                    <div class="row p-l-30"><!-- MANAGE PEOPLE TEXT-->
                        <div class="col-12">
                            <div class="overview-wrap clearfix" >
                                <h2 class="title-1" >
                                    <i class="fas fa-users"></i><strong>  Manage People</strong>
                                </h2>
                            </div>
                        </div>
                    </div><!-- END TEXT-->
                    <div class="statistic statistic2"><!-- BIG BUTTONS-->
                        <div class="container">
                            <div class="row p-b-50">
                                <div class="col-6" style="text-align: center;">
                                    <a href="student.php" class="col-12 btn-lg au-btn--green p-t-65 p-b-65 p-l-50 p-r-50">
                                        <button>
                                            <h2 style="color: white;">Accounts for Student</h2>
                                        </button>
                                    </a>
                                </div>
                                <div class="col-6" style="text-align: center;">
                                    <a href="employee.php" class="col-12 btn-lg au-btn--orange p-t-65 p-b-65 p-l-50 p-r-50">
                                        <button>
                                            <h2 style="color: white;">Accounts for Employee</h2>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- END BUTTONS-->
                    <hr><!-- HORIZONTAL LINE -->
                    <div class="row p-l-30"><!-- STATISTICS TEXT-->
                        <div class="col-12">
                            <div class="overview-wrap clearfix m-b-20">
                                <h2 class="title-1">
                                    <i class="fas fa-tachometer-alt"></i><strong> Statistics</strong>
                                </h2>
                            </div>
                        </div>
                    </div><!-- END TEXT-->
                    <div class="row"><!-- STATISTICS CHARTS-->
                        <div class="col-lg-6">
                            <div class="au-card chart-percent-card">
                                <div class="au-card-inner">
                                    <h3 class="title-2 tm-b-5">USERS REGISTERED</h3>
                                    <div class="row no-gutters">
                                        <div class="col-xl-6">
                                           <div class="chart-note-wrap">
                                                    <div class="chart-note d-block">
                                                        <span class="dot dot--blue"></span>
                                                        <span>ICT</span>
                                                    </div>
                                                    <div class="chart-note d-block">
                                                        <span class="dot dot--red"></span>
                                                        <span>IT</span>
                                                    </div>
                                                     <div class="chart-note  d-block">
                                                        <span class="dot dot--green"></span>
                                                        <span>CS</span>
                                                    </div>
                                                    <div class="chart-note d-block">
                                                        <span class="dot" style="background: blue"></span>
                                                        <span>IS</span>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="percent-chart">
                                                <canvas id="percent-chart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- END CHARTS-->
                    <hr><!-- HORIZONTAL LINE -->
                    <div class="row"><!-- COPYRIGHT-->
                        <div class="col-md-12">
                            <div class="copyright">
                                 <p>Copyright © 2018 PsychCare. All rights reserved.</p>
                            </div>
                        </div>
                    </div><!-- END COPYRIGHT-->
                </div>
            </div><!--END MAIN CONTENT-->
        </div>
    </div>
</body>
<?php require('../views/footer.php');
?>