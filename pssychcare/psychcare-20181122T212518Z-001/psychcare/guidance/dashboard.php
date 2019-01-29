<?php require('../controllers/session_controller.php'); if($_SESSION['emp_Privilege']!=1){header('Location: ../index.php');}?>
<?php include('../controllers/guidance_controller.php');
$emp_ID = $_SESSION['emp_ID'];
$result =  loadVacantAppointments($emp_ID);if (($result)==0) {$noresult = 0;}
$result2 = loadOccupiedAppointments($emp_ID);if (($result2)==0) {$noresult2 = 0;}
$result3 = loadCompletedAppointments($emp_ID);if (($result3)==0) {$noresult3 = 0;}?>
<?php require('../views/header.php');require('navbars.php');require('../views/alert.php');?>
<body class="animsition">
    <div class="page-wrapper">
        <!-- PAGE CONTAINER-->
        <div class="page-container">
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
                    <div class="col-12" >
                        <a id="app" tabindex="1" style="padding-top: 60px; margin-top: -60px;"></a>
                    </div>
                    <hr>
                    <div class="container-fluid">
                        <div class="row m-t-5">
                            <div class="col-12">
                                <div class="overview-wrap clearfix">
                                    <h1 class="title-1 m-b-40">
                                        <i class="fas fa-calendar"></i>
                                        <strong> Appointments</strong>
                                    </h1>
                                </div>
                                <div class="overview-box clearfix m-b-20">
                                    <h3 class="title-3 m-b-20">Vacant Schedules</h3> 
                                    <?php if (!isset($noresult)){ ?>
                                        <a href="#add" id="mbtnAppointment"><i class="fas fa-plus"></i><strong> Add Schedule</strong></a>
                                    <?php } ?>
                                    <div class="table-responsive table--no-card m-b-40">
                                        <table class="table table-borderless table-striped table-earning">
                                            <thead>
                                                <tr>
                                                    <th style="background-color: darkkhaki;">Date</th>
                                                    <th style="background-color: darkkhaki;">Time Start</th>
                                                    <th style="background-color: darkkhaki;">Time end</th>
                                                    <th style="background-color: darkkhaki;"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (isset($noresult)){ ?>
                                                <tr>
                                                    <td><a href="#add" id="mbtnAppointment"><i class="fas fa-plus"></i><strong> Add Schedule</strong></a></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <?php
                                            }else{ foreach($result as $row){?>
                                                <tr>
                                                    <td hidden><?php $id = $row['schedule_ID'] ?></td>
                                                    <td><?php echo date('M d, Y ',strtotime($row['date_available'])) ?></td>
                                                    <td><?php echo date('h:i A ',strtotime($row['time_start'])) ?></td>
                                                    <td><?php echo date('h:i A ',strtotime($row['time_end'])) ?></td>
                                                    <td><button class="btn-sm btn-danger" onclick="removethisAppointment(<?php echo $id?>)">Remove</button></td>
                                                </tr>
                                            <?php }}?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <a id="occ" tabindex="1" style="padding-top: 80px; margin-top: -80px;"></a>
                            </div>
                            <div class="col-12">
                                <div class="overview-box clearfix">
                                    <h3 class="title-3 m-b-20">Occupied Schedules</h3>
                                    <div class="table-responsive table--no-card m-b-40">
                                        <table class="table table-borderless table-striped table-earning">
                                            <thead>
                                                <tr>
                                                    <th style="background-color: yellowgreen;">Date</th>
                                                    <th style="background-color: yellowgreen;">Time start</th>
                                                    <th style="background-color: yellowgreen;">Time end</th>
                                                    <th style="background-color: yellowgreen;text-align: center;">Student Name</th>
                                                    <th style="background-color: yellowgreen;">Status</th>
                                                    <th style="background-color: yellowgreen;"></th>
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
                                                    <td></td>
                                                </tr>
                                                <?php 
                                            }else{ foreach($result2 as $row2){?>
                                                <tr>
                                                    <td hidden><?php $id = $row2['schedule_ID'] ?></td>
                                                    <td><?php echo date('M d, Y ',strtotime($row2['date_available'])) ?></td>
                                                    <td><?php echo date('h:i A ',strtotime($row2['time_start'])) ?></td>
                                                    <td><?php echo date('h:i A ',strtotime($row2['time_end'])) ?></td>
                                                    <td><?php echo $row2['student_FN']." ".$row2['student_LN'] ?></td>
                                                    <td><?php echo $row2['appointment_status']?></td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                        <button class="item btn-danger" onclick="removethisAppointment(<?php echo $id;?>)"><i class="zmdi zmdi-close"></i></button>
                                                        <button class="item btn-success" onclick="updatethisAppointment(<?php echo $id;?>)"><i class="zmdi zmdi-check"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php }} ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                            <a id="prv" tabindex="1" style="padding-top: 80px; margin-top: -80px;"></a>
                            </div>
                            <div class="col-12">
                                <div class="overview-box clearfix">
                                    <h3 class="title-3 m-b-20">Previous Appointments</h3>
                                    <div class="table-responsive table--no-card m-b-40">
                                        <table class="table table-borderless table-striped table-earning">
                                            
                                            <thead>
                                                <tr>
                                                    <th style="background-color: skyblue;">Date</th>
                                                    <th style="background-color: skyblue;">Time start</th>
                                                    <th style="background-color: skyblue;">Time end</th>
                                                    <th style="background-color: skyblue;">Student Name</th>
                                                    <th style="background-color: skyblue;">Status</th>
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
                                            }else{ foreach($result3 as $row3){?>
                                                <tr>
                                                    <td><?php echo date('M d, Y ',strtotime($row3['date_available'])) ?></td>
                                                    <td><?php echo date('h:i A ',strtotime($row3['time_start'])) ?></td>
                                                    <td><?php echo date('h:i A ',strtotime($row3['time_end'])) ?></td>
                                                    <td><?php echo $row3['student_FN']." ".$row3['student_LN'] ?></td>
                                                    <td><?php echo $row3['appointment_status']?></td>
                                                </tr>
                                                <?php }} ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="container-fluid">
                        <div class="col-12">
                            <a id="add" tabindex="1" style="padding-top: 90px; margin-top: -90px;"></a>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="overview-wrap clearfix">
                                    <h1 class="title-4"> New vacant schedule</h1>
                                </div>
                                <form method="POST" action="../controllers/guidance_controller.php">
                                    <small>Fill up the form below to add a new schedule.</small>
                                    <div class="row p-t-25">
                                        <div class="col-3">
                                            <div class="form-group m-b-0">
                                                <label>Date</label>
                                                <input type="date" class="form-control" name="date-of-sched" min="<?php echo date('Y-m-d'); ?>" autocomplete="off" required>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-group m-b-0">
                                                <label>Time from</label>
                                                <input type="time" class="form-control time-from" name="time-from" min="08:00" max="17:00" step="1800" required>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-group m-b-0">
                                                <label>Until </label>
                                                <input type="time" class="form-control time-until" name="time-until" min="08:00" max="18:00" step="1800" onblur="validateTime();" required>
                                            </div>
                                        </div>
                                    </div>
                                    <small><i>Note: Appointment schedules should start from 8:00AM until 5:00PM only.</i></small>
                                    <div class="row p-t-25">
                                        <div class="col-4">
                                            <div class="form-group m-b-30">
                                                <label>Counselor Name</label>
                                                <input type="text" class="form-control" value="<?php echo $_SESSION['emp_FN'].' '.$_SESSION['emp_LN'];?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group m-b-30">
                                                <label>Contact Number</label>
                                                <input type="number" class="form-control" name="contact_no" placeholder="Optional" >
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group m-l-50 m-b-30 m-t-34">
                                                <button class="au-btn au-btn--green submit_sched" name="btnConfirmSched" type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="container-fluid">
                        <div class="col-12">
                            <a id="stat" tabindex="1" style="padding-top: 80px; margin-top: -80px;"></a>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="overview-wrap clearfix m-b-20" >
                                    <h2 class="title-1" >
                                        <i class="fas fa-tachometer-alt"></i>
                                        <strong> Daily statistic</strong>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 m-b-5">Daily result</h3>
                                        <div class="chart-info">
                                            <div class="chart-info__left">
                                                <div class="chart-note">
                                                    <span class="dot dot--blue"></span>
                                                    <span>Student</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="recent-report__chart">
                                            <canvas id="recent-rep2-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
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
                                                        <span class="dot dot--blue"></span>
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
                    </div>
                </div>
            </div><!-- END MAIN CONTENT-->
            <div class="row">
                <div class="col-12">
                    <div class="copyright">
                        <p>Copyright © 2018 PsychCare. All rights reserved.</p>
                    </div>
                </div>
            </div>
            <?php require('categories.php'); ?>
        </div>
    </div>
</body>
<?php require('../views/footer.php');?>