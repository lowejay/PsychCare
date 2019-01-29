<?php require('../controllers/session_controller.php'); if($_SESSION['emp_Privilege']!=2){header('Location: ../index.php');}require('../controllers/teacher_controller.php');
$emp_ID = $_SESSION['emp_ID'];
$class = loadClassSched($emp_ID);if (($class)==0) {$noclass = 0;}?>
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
                                <h1 id="maindesc">Class List</h1>
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
			<div class="main-content p-t-100">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="table-data__tool">
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#modalAddSched">
                                            <i class="fas fa-plus"></i>Add Schedule
                                        </button>     
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <?php if (isset($noclass)){ ?>
                                        <tbody>
                                            <tr>
                                                <td><i class="fas fa-times">&nbsp;&nbsp;</i><strong>No class schedules found.</strong></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                        <?php
                                        }else{ ?> 
                                        <thead>
                                            <tr>
                                                <th>Course</th>
                                                <th>Subject</th>
                                                <th>Schedule</th>
                                                <th>Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($class as $row){?>
                                            <tr class="tr-shadow">
                                                <td hidden><?php $id= $row['class_ID']; ?></td>
                                                <td><?php echo $row['course_code'] ?></td>
                                                <td><?php echo $row['course_code']." ".$row['course_title'] ?></td>
                                                <td><?php echo $row['class_day'] ?></td>
                                                <td><?php echo date('h:i A ',strtotime($row['time_start']))." - ".date('h:i A ',strtotime($row['time_end'])) ?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="View" type="button" onclick="location.href='view.php?classid=<?php echo $row['class_ID'];?>'">
                                                            <i class="zmdi zmdi-eye"></i>
                                                        </button>
                                                        <button class="item edit_sched" data-toggle="tooltip" data-placement="top" title="Edit" type="button" id="<?php echo $row['class_ID'];?>">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Remove" type="button" onclick="removethisSchedule(<?php echo $id?>)">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                        <?php }}?>
                                        </tbody>  
                                    </table>
                                </div>
                            </div>
    					</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="copyright">
                        <p>Copyright © 2018 PsychCare. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
        

    
    <!-- MODAL ADD SCHED -->
        <div class="modal fade" id="modalAddSched" role="dialog" aria-labelledby="addButtonModal" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addButtonModal">New Class Schedule</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    <form action="../controllers/teacher_controller.php" method="POST">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="select-course" class="control-label">Course</label>
                                        <select name="select-course" id="select-course" class="form-control" required>
                                            <option value=""></option>
                                            <option value="ICT">ICT</option>
                                            <option value="IT">IT</option>
                                            <option value="IS">IS</option>
                                            <option value="CS">CS</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="course-title" class="control-label">Subject</label>
                                        <input id="course-title" name="course-title" type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="select-sched" class="control-label">Schedule</label>
                                        <select name="select-sched" id="select-sched" class="form-control" required>
                                            <option value=""></option>
                                            <option value="MW">MW</option>
                                            <option value="MWF">MWF</option>
                                            <option value="TTH">TTH</option>
                                            <option value="TTHSAT">TThSat</option>
                                            <option value="SATSUN">SatSun</option>
                                            <option value="Monday">Monday</option>
                                            <option value="Tuesday">Tuesday</option>
                                            <option value="Wednesday">Wednesday</option>
                                            <option value="Thursday">Thursday</option>
                                            <option value="Friday">Friday</option>
                                            <option value="Saturday">Saturday</option>
                                            <option value="Sunday">Sunday</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="time-from" class="control-label">Time-Start</label>
                                        <input type="time" class="form-control time-from" name="time-from" min="07:30" max="19:30" step="1800" required>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="time-until" class="control-label">Time-End</label>
                                        <input type="time" class="form-control time-until" name="time-until" min="08:30" max="21:00" step="1800" onblur="validateScheduleTime();" required>   
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" name="btnConfirmSched" class="btn au-btn--orange submit_schedule" style="color: white;">Confirm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!-- END MODAL ADD SCHED -->

    <!--- EDIT SCHEDULE -->
       <div class="modal fade" id="modalEditSchedule" tabindex="-1" role="dialog" aria-labelledby="editButtonModal" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editButtonModal">Edit Schedule</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="../controllers/teacher_controller.php" method="POST">
                        <div class="modal-body" id="edit_fetch_result">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" name="btnEditSched" class="btn au-btn--orange" style="color: white;">Confirm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--- END EDIT SCHEDULE -->
    </div>
</body>
<?php require('../views/footer.php');?>