<?php require('../controllers/session_controller.php'); if(!$_SESSION['student_ID']){header('Location: ../index.php');}
require('../views/header.php');require('navbars.php');require('../views/alert.php');
require('../controllers/student_controller.php');
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
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="../images/icon/avatar-02.jpg" alt="Student-one" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION['student_FN']?></a>
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
                <div class="section__content section__content--p30 p-t-40">
					<div class="container-fluid">
    					<div class="row m-t-5">
                            <div class="col-12">
                                <div class="overview-box clearfix">
                                        <h3 class="title-2 m-b-20">My Appointments</h3>
                                    <div class="table-responsive table--no-card m-b-40">
                                    	<table class="table table-borderless table-striped table-earning">
                                            <thead>
                                                <tr>
                                                    <th style="background-color: yellowgreen;">Counselor</th>
                                                    <th style="background-color: yellowgreen;">Date</th>
                                                    <th style="background-color: yellowgreen;">Time start</th>
                                                    <th style="background-color: yellowgreen;">Time end</th>
                                                    <th style="background-color: yellowgreen;">Status</th>
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
                                                    <td><?php echo date('M d, Y ',strtotime($row['date_available']))?></td>
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
                                                    <th style="background-color: darkkhaki;">Counselor</th>
                                                    <th style="background-color: darkkhaki;">Date</th>
                                                    <th style="background-color: darkkhaki;">Time start</th>
                                                    <th style="background-color: darkkhaki;">Time end</th>
                                                    <th style="background-color: darkkhaki;">status</th>
                                                    <th style="background-color: darkkhaki;">option</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (isset($noresult)){ ?>
                                                <tr>
                                                    <td><i class="fas fa-times"></i><strong> No schedules available</strong></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <?php 
                                            }else{ foreach($result as $row){?>
                                                <tr>
                                                    <td hidden><?php $id = $row['appointment_ID'] ?></td>
                                                    <td><?php echo $row['emp_FN']." ".$row['emp_LN'] ?></td>
                                                    <td><?php echo date('M d, Y ',strtotime($row['date_available'])) ?></td>
                                                    <td><?php echo date('h:i A ',strtotime($row['time_start'])) ?></td>
                                                    <td><?php echo date('h:i A ',strtotime($row['time_end'])) ?></td>
                                                    <td><?php echo $row['appointment_status'] ?></td>
                                                    <td><button class = "btn btn-success" onclick="addAppointment(<?php echo $id;?>)">Add</button></td>
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
                                        <h3 class="title-2 m-b-20">Appointments Done</h3>
                                    <div class="table-responsive table--no-card m-b-40">
                                        <table class="table table-borderless table-striped table-earning">
                                            <thead>
                                                <tr>
                                                    <th style="background-color: skyblue;">Counselor</th>
                                                    <th style="background-color: skyblue;">Date</th>
                                                    <th style="background-color: skyblue;">Time start</th>
                                                    <th style="background-color: skyblue;">Time end</th>
                                                    <th style="background-color: skyblue;">status</th>
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