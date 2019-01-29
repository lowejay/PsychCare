<?php require('../controllers/session_controller.php'); if(!$_SESSION['emp_ID']){header('Location: ../index.php');}?>
<?php require('../views/header.php');?>
<?php include('../controllers/teacher_controller.php');
$emp_ID = $_SESSION['emp_ID'];
$result = loadClassList($emp_ID);
?>

<body class="animsition">
    <div class="page-wrapper">
        <!-- PAGE CONTAINER-->
		<div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                                <h2 id="maindesc">My class list</h2>
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
                        <div class="row m-t-30">
    					   <div class="col-md-12">
                                <center><h5 class="title-5 m-b-5"><i class="fa fa-emps"></i> Schedules</h5></center>
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Course</th>
                                                <th>Subject</th>
                                                <th>Schedule</th>
                                                <th>Time</th>
                                            </tr>
                                        </thead>
										<tbody>
                                        <?php foreach($result as $row){?>
                                            <tr>
                                                <td><?php echo $row['course_code'] ?></td>
                                                <td><?php echo $row['course_title'] ?></td>
                                                <td><?php echo $row['class_day'] ?></td>
                                                <td><?php echo $row['time_start']." - ".$row['time_end'] ?></td>
                                               
                                                <!--<td><a href="edit.php" class="btn btn-info btn-sm"><i class='fa fa-edit'></i> Edit </a></td>
                                                <td><a href="delete.php" class="btn btn-danger btn-sm"><i class='fa fa-trash'></i> Delete </a></td>
                                                <td><a href="view.php" class="btn btn-success btn-sm"><i class='fa fa-eye'></i> View </a></td>   --> 
                                            </tr>
                                        <?php } ?>
                                        </tbody> 
                                    </table>
                                </div>
                            </div>
                            <div class="sidebar">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalAddSched"><i class="fa fa-emp"></i> Add New Schedule
                                </button>
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
        <div class="modal fade" id="modalAddSched" tabindex="-1" role="dialog" aria-labelledby="addButtonModal" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addButtonModal">New Class Schedule</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    <div class="modal-body">
                        <form action="../controllers/teacher_controller.php" method="POST">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="select-course" class="control-label mb-1">Course</label>
                                                <select name="select-course" id="select-course" class="form-control">
                                                    <option value="ICT">ICT</option>
                                                    <option value="IT">IT</option>
                                                    <option value="IS">IS</option>
                                                    <option value="CS">CS</option>
                                                </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="course-title" class="control-label mb-1">Subject</label>
                                            <input id="course-title" name="course-title" type="text" class="form-control" data-val="true" data-val-required="Please enter the Class Schedule"/>
                                                <span class="help-block" data-valmsg-for="course-title" data-valmsg-summary="true"></span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="select-sched" class="control-label mb-1">Schedule</label>
                                                <select name="select-sched" id="select-sched" class="form-control">
                                                    <option value="MW">MW</option>
                                                    <option value="MWF">MWF</option>
                                                    <option value="TTH">TTH</option>
                                                    <option value="TTHSAT">TThSat</option>
                                                    <option value="SATSUN">SatSun</option>
                                                    <option value="M">Monday</option>
                                                    <option value="T">Tuesday</option>
                                                    <option value="W">Wednesday</option>
                                                    <option value="TH">Thursday</option>
                                                    <option value="F">Friday</option>
                                                    <option value="SAT">Saturday</option>
                                                    <option value="SUN">Sunday</option>
                                                </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="time-from" class="control-label mb-1">Time-Start</label>
                                            <input id="time-from" name="time-from" type="time" class="form-control" data-val="true" data-val-required="Please enter the Time Start"/>
                                                <span class="help-block" data-valmsg-for="time-from" data-valmsg-summary="true"></span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="time-until" class="control-label mb-1">Time-End</label>
                                            <input id="time-until" name="time-until" type="time" class="form-control" data-val="true" data-val-required="Please enter the Time-End"/>
                                                <span class="help-block" data-valmsg-for="time-until" data-valmsg-replace="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" name="btnConfirmStudent" class="btn au-btn--orange">Confirm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?php require('../views/footer.php');
?>