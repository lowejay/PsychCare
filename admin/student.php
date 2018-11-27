<?php require('../controllers/session_controller.php'); if($_SESSION['emp_Privilege']!=3){header('Location: ../index.php');}?>
<?php include('../controllers/admin_controller.php');
$emp_ID = $_SESSION['emp_ID'];
$result = loadStudent();?>
<?php require('../views/header.php');?>
<body class="animsition">
<?php include('../views/alert.php'); ?>
    <div class="page-wrapper">
        <div class="page-container p-l-0">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop" style="left: 0;">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                        <h2 id="maindesc">Student Data</h2>
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
                                            <img src="../images/icon/avatar-01.jpg" alt="Admin-one" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION['emp_FN']." ".$_SESSION['emp_LN'];?></a>
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
            </header>
            <!--END HEADER DESKTOP-->
            <!--BUTTONS-->
            <div class="main-content" style="left: 0;">
                <div class="row m-t-50">
                    <div class="container-fluid">
                        <div class="col-12 p-l-100">
                            <div class="table-data__tool">
                                <div class="table-data__tool-right">
                                    <a href="dashboard.php" value="Back" class="au-btn au-btn-icon au-btn--orange au-btn--small">
                                        <i class="zmdi zmdi-arrow-left"></i>Back
                                    </a>
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#modalAddStud">
                                        <i class="zmdi zmdi-plus"></i>Add Student
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END BUTTONS-->
                <!--STUDENT TABLE-->
                    <div class="table-responsive m-b-40 p-l-100 p-r-70">
                        <table class="table table-borderless table-data3">
                            <thead>
                                <tr>
                                    <th>id number</th>
                                    <th>first name</th>
                                    <th>last name</th>
                                    <th>course</th>
                                    <th>year</th>
                                    <th>email</th>
                                    <th>contact</th>
                                    <th>delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($result as $row){?>
                                <tr>
                                    <td><?php echo $row['student_ID'] ?></td>
                                    <td><?php echo $row['student_FN']?></td>
                                    <td><?php echo $row['student_LN'] ?></td>
                                    <td><?php echo $row['course_code'] ?></td>
                                    <td><?php echo $row['year_code'] ?></td>
                                    <td><?php echo $row['student_Email']?></td>
                                    <td><?php echo $row['student_Contact']?></td>
                                    <td><a href="../controllers/admin_controller.php?student_ID=<?php echo $row['student_ID']?>" onclick="return confirm('Are you sure you want to delete this student?')">
                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="zmdi zmdi-delete"></i>
                                        </button> </a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>   
                        </table>
                    </div>
                <!-- END STUDENT TABLE-->
            </div>
            <!--COPYRIGHT-->
            <section class="p-b-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2018 PsychCare. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--END COPYRIGHT-->
        </div>
        <!-- MODAL ADD STUDENT -->
        <div class="modal fade" id="modalAddStud" tabindex="-1" role="dialog" aria-labelledby="addButtonModal" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addButtonModal">Add Student</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="../controllers/admin_controller.php" method="POST">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="student_ID" class="control-label mb-1">ID Number</label>
                                        <input id="student_ID" name="student_ID" type="text" class="form-control" data-val="true" data-val-required="Please enter the ID number"/>
                                        <span class="help-block" data-valmsg-for="student_ID" data-valmsg-summary="true"></span>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="student_LN" class="control-label mb-1">Last Name</label>
                                        <input id="student_LN" name="student_LN" type="text" class="form-control" data-val="true" data-val-required="Please enter the Last Name"/>
                                        <span class="help-block" data-valmsg-for="student_LN" data-valmsg-summary="true"></span>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="student_FN" class="control-label mb-1">First Name</label>
                                        <input id="student_FN" name="student_FN" type="text" class="form-control" data-val="true" data-val-required="Please enter the First Name"/>
                                        <span class="help-block" data-valmsg-for="student_FN" data-valmsg-summary="true"></span>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="course_code" class="control-label mb-1">Course</label>
                                        <select name="course_code" id="course_code" class="form-control">
                                            <option value="ICT">ICT</option>
                                            <option value="IT">IT</option>
                                            <option value="IS">IS</option>
                                            <option value="CS">CS</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="year_code" class="control-label mb-1">year</label>
                                        <select name="year_code" id="year_code" class="form-control">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="student_Email" class="control-label mb-1">Email</label>
                                        <input id="student_Email" name="student_Email" type="text" class="form-control" data-val="true" data-val-required="Please enter the Class Schedule"/>
                                        <span class="help-block" data-valmsg-for="student_Email" data-valmsg-summary="true"></span>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="student_Contact" class="control-label mb-1">Contact</label>
                                        <input id="student_Contact" name="student_Contact" type="text" class="form-control" data-val="true" data-val-required="Please enter the Class Schedule"/>
                                        <span class="help-block" data-valmsg-for="student_Contact" data-valmsg-summary="true"></span>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="student_Password" class="control-label mb-1">Password</label>
                                        <input id="student_Password" name="student_Password" type="password" class="form-control" data-val="true" data-val-required="Please enter the Class Schedule"/>
                                        <span class="help-block" data-valmsg-for="student_Password" data-valmsg-summary="true"></span>
                                    </div>
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
        <!-- END OF MODAL ADD STUDENT-->
    </div>
</body>
<?php require('../views/footer.php');
?>