<?php require('../controllers/session_controller.php'); if($_SESSION['emp_Privilege']!=2){header('Location: ../index.php');}?>
<?php require('../views/header.php');?>
<?php require('categories.php'); ?>
<?php require('navbars.php'); ?>

<body class="animsition">
    <div class="page-wrapper">
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                                <h1 id="maindesc">Dashboard</h1>
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
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="col-12">
                            <a id="cat" tabindex="1" style="padding-top: 90px; margin-top: -90px;"></a>
                        </div>
                        <div class="overview-wrap">
                            <h1 class="title-1 m-b-20">
                                <i class="fas fa-pencil-square-o"></i>
                                <strong> Categories</strong>
                            </h1>
                        </div>
                        <div class="row m-t-25 m-b-40">
                            <div class="col-3">
                                <button class="overview-item overview-item--c1" type="button" data-id="IDr" data-toggle="modal" data-target="#dreamModal">
                                    <div class="col">
                                        <div class="overview__inner">
                                            <div class="overview-box clearfix">
                                                <div class="icon">
                                                     <i class="fas fa-cloud"></i>
                                                </div>
                                                <div class="text">
                                                    <span>Dreams</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </div>
                            <div class="col-3">
                                <button class="overview-item overview-item--c2" type="button" data-id="TL" data-toggle="modal" data-target="#learnerModal">
                                    <div class="col">
                                        <div class="overview__inner">
                                            <div class="overview-box">
                                                <div class="icon">
                                                    <i class="fas fa-shapes"></i>
                                                </div>
                                                <div class="text">
                                                    <span>Learners</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </div>
                            <div class="col-3">
                                <button class="overview-item overview-item--c3" type="button" data-id="PT" data-toggle="modal" data-target="#personalityModal">
                                    <div class="col">
                                        <div class="overview__inner">
                                            <div class="overview-box">
                                                <div class="icon">
                                                   <i class="zmdi zmdi-face"></i>
                                                </div>
                                                <div class="text">
                                                    <span>Personality</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </div>
                            <div class="col-3">
                                <button class="overview-item overview-item--c4" type="button" data-id="PD" data-toggle="modal" data-target="#disorderModal">
                                    <div class="col">
                                        <div class="overview__inner">
                                            <div class="overview-box clearfix">
                                                <div class="icon">
                                                  <i class="fas fa-code-branch"></i>
                                                </div>
                                                <div class="text">
                                                    <span>Psychological</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>     
                        <hr>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card chart-percent-card p-t-41 p-b-0">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Course</h3>
                                        <div class="row no-gutters">
                                            <div class="col-3">
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
                                            <div class="col-9">
                                                <div class="percent-chart">
                                                    <canvas id="percent-chart"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-9">
                                <h1 class="title-1 m-b-20">Results</h1>
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
    </body>
<?php require('../views/footer.php');
?>