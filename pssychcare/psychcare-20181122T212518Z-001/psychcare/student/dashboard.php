<?php require('../controllers/session_controller.php'); if(!$_SESSION['student_ID']){header('Location: ../index.php');}?>
<?php require('navbars.php') ?>
<?php require('../views/header.php');?> <?php require('categories.php'); ?>
<?php require('../controllers/student_controller.php'); 

$user_ID = $_SESSION['student_ID'];     
$result2 = loadVacantAppointments($user_ID);if (($result2)==0) {$noresult2 = 0;}?>
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
                                                    <a href="profile.php">
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
                <!-- PENDING APPOINTMENT-->
                <div class="row">
                    <div id="myAppointment"class="col-lg-9">
                         <div class="row m-t-5">
                            <div class="col-12">
                                <div class="overview-box clearfix">
                                        <h3 class="title-2 m-b-20">My Appointments</h3>
                                    <div class="table-responsive table--no-card m-b-40">
                                        <table class="table table-borderless table-striped table-earning">
                                            <thead>
                                                <tr>
                                                    <th>Counselor</th>
                                                    <th>Date</th>
                                                    <th>Time start</th>
                                                    <th>Time end</th>
                                                    <th>status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (isset($noresult2)){ ?>
                                                <tr>
                                                    <td><i class="fas fa-times"></i><strong> No records found</strong></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <?php 
                                            }else{ foreach($result2 as $row){?>
                                            <tr>
                                                <td><?php echo $row['emp_FN']." ".$row['emp_LN'] ?></td>
                                                <td><?php echo date('M d, Y ',strtotime($row['date_available'])) ?></td>
                                                <td><?php echo date('h:i A ',strtotime($row['time_start'])) ?></td>
                                                <td><?php echo date('h:i A ',strtotime($row['time_end'])) ?></td>
                                                <td><?php echo $row['appointment_status'] ?></td>
                                            </tr>
                                                <?php }} ?>
                                        </tbody>    
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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