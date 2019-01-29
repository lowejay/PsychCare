<?php require('../controllers/session_controller.php'); if(!$_SESSION['user_ID']){header('Location: ../index.php');}?>
<?php require('../views/header.php');?>
<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="dashboard.php">
                            <img src="../images/logo-landscape.png" width="165" height="50"  alt="PsychCare" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                       <li class="nav-item">
                            <a class="js-arrow" href="dashboard.php">
                                <i class="fas fa-tachometer-alt"></i>Categories</a>
                        </li>
                        <li class="nav-item">
                            <a href="pendingappointment.php">
                                <i class="fa fa-spinner"></i>Pending Appointment</a>
                        </li>
                        <li class="nav-item">
                            <a href="history.php">
                                <i class="fa fa-history"></i>History</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="dashboard.php">
                    <img src="../images/logo-landscape.png" width="175" height="20" alt="PsychCare" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="nav-item">
                            <a class="js-arrow" href="dashboard.php">
                                <i class="fas fa-tachometer-alt"></i>Categories</a>
                        </li>
                        <li class="nav-item">
                            <a href="pendingappointment.php">
                                <i class="fa fa-spinner"></i>Pending Appointment</a>
                        </li>
                        <li class="nav-item">
                            <a href="history.php">
                                <i class="fa fa-history"></i>History</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-25">
                                <br><br><br>
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
                            <div class="col-lg-9">
                                <h2 class="title-1 m-b-20">Pending Appointment</h2>
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