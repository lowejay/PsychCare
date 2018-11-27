<?php require('../controllers/session_controller.php'); if(!$_SESSION['student_ID']){header('Location: ../index.php');}?>
<?php require('../views/header.php');?>
<?php require('navbars.php') ?>
<?php require('../views/alert.php') ?>
<?php include('../controllers/student_controller.php');


$user_ID = $_SESSION['student_ID'];
$result = loadVacantAppointments($user_ID);if (($result)==0) {$noresult = 0;}
$result2 = loadMyAppointments($user_ID);if (($result2)==0) {$noresult2 = 0;}
$result3 = loadDoneAppointments($user_ID);if (($result3)==0) {$noresult3 = 0;}?>


<body class="animsition">
    <div class="page-wrapper">
		<div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                                <h2 id="maindesc">Appointments</h2>
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
			<div class="main-content">
                <div class="section__content section__content--p30">
					<div class="container-fluid">
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
                                                    <th>Status</th>
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
                                <div class="row m-t-5">
                            <div class="col-12">
                                <div class="overview-box clearfix">
                                        <h3 class="title-2 m-b-20">Schedules Available</h3>
                                    <div class="table-responsive table--no-card m-b-40">
                                        <table class="table table-borderless table-striped table-earning">
                                            <thead>
                                                <tr>
                                                    <th>Counselor</th>
                                                    <th>Date</th>
                                                    <th>Time start</th>
                                                    <th>Time end</th>
                                                    <th>status</th>
                                                    <th>option</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 <?php if (isset($noresult)){ ?>
                                                <tr>
                                                    <td><i class="fas fa-times"></i><strong> No records found</strong></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <?php 
                                            }else{ foreach($result as $row){?>
                                            <tr >
                                                <td hidden><?php $id = $row['schedule_ID'] ?></td>
                                                <td><?php echo $row['emp_FN']." ".$row['emp_LN'] ?></td>
                                                <td><?php echo date('M d, Y ',strtotime($row['date_available'])) ?></td>
                                                <td><?php echo date('h:i A ',strtotime($row['time_start'])) ?></td>
                                                <td><?php echo date('h:i A ',strtotime($row['time_end'])) ?></td>
                                                <td><?php echo $row['appointment_status'] ?></td>
                                                <td><button class = "btn btn-success" onclick="addAppointment(<?php echo $id;?>)">Add</button></a></td>

                                            </tr>
                                                <?php }} ?>
                                        </tbody>    
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                         <div class="row m-t-5">
                            <div class="col-12">
                                <div class="overview-box clearfix">
                                        <h3 class="title-2 m-b-20">Appointments Done</h3>
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
                                                <?php if (isset($noresult3)){ ?>
                                                <tr>
                                                    <td><i class="fas fa-times"></i><strong> No records found</strong></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <?php 
                                            }else{ foreach($result3 as $row){?>
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
<?php require('../views/footer.php');?>