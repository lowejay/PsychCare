<?php 
require('../controllers/session_controller.php'); if($_SESSION['emp_Privilege']!=3){header('Location: ../index.php');}
require('../views/header.php');require('../views/alert.php'); 
require('../controllers/admin_controller.php');
$emp_ID = $_SESSION['emp_ID'];
$result = loadStudent();if (($result)==0) {$noresult = 0;}?>
<body class="animsition">
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
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION['emp_FN'];?></a>
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
            <div class="main-content">
                <div class="row m-t-50">
                    <div class="container-fluid">
                        <div class="col-12 p-l-100">
                            <div class="table-data__tool">
                                <div class="table-data__tool-right">
                                    <a href="dashboard.php" class="au-btn au-btn-icon au-btn--orange au-btn--small">
                                        <i class="fas fa-arrow-left"></i>Back
                                    </a>
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#modalAddStud">
                                        <i class="fas fa-plus"></i>Add Student
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--STUDENT TABLE-->
                <div class="container-fluid">
                    <div class="col-12">
                        <div class="overview-box clearfix m-b-40 p-l-70 p-r-70">
                            <div class="table-responsive table--no-card m-b-40">
                                <table class="table table-borderless table-striped table-earning">
                                    <thead>
                                        <tr>
                                            <th style="background-color: #b7b01d">id number</th>
                                            <th style="background-color: #b7b01d">name</th>
                                            <th style="background-color: #b7b01d">course & year</th>
                                            <th style="background-color: #b7b01d">email</th>
                                            <th style="background-color: #b7b01d">contact</th>
                                            <th style="background-color: #b7b01d">option</th>
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
                                    <?php }else{ foreach($result as $row){?>
                                        <tr>
                                            <td><?php echo $id = $row['student_ID'] ?></td>
                                            <td><?php echo $row['student_FN']." ".$row['student_LN']?></td>
                                            <td><?php echo $row['course_code']." - ".$row['year_code']?></td>
                                            <td style="text-transform: none;"><?php echo $row['student_Email']?></td>
                                            <td><?php echo $row['student_Contact']?></td>                                        
                                            <td>
                                                <div class="table-data-feature">
                                                    <button class="item btn-danger" onclick="removethisStudent(<?php echo $id;?>)"><i class="zmdi zmdi-close"></i></button>
                                                </div>
                                            </td>  
                                        </tr>
                                    <?php }} ?>
                                    </tbody>   
                                </table>
                            </div>
                        </div>
                    </div>
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
            <!-- MODAL ADD STUDENT -->
            <div class="modal fade" id="modalAddStud" role="dialog" aria-labelledby="addButtonModal" aria-hidden="true">
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
                                            <label for="student_FN" class="control-label mb-1">First Name</label>
                                            <input id="student_FN" name="student_FN" type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group">
                                            <label for="student_LN" class="control-label mb-1">Last Name</label>
                                            <input id="student_LN" name="student_LN" type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group">
                                            <label for="course_code" class="control-label mb-1">Course</label>
                                            <select name="course_code" id="course_code" class="form-control" required>
                                                <option value=""></option>
                                                <option value="ICT">ICT</option>
                                                <option value="IT">IT</option>
                                                <option value="IS">IS</option>
                                                <option value="CS">CS</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group">
                                            <label for="year_code" class="control-label mb-1">Year</label>
                                            <select name="year_code" id="year_code" class="form-control" required>
                                                <option value=""></option>
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
                                            <input id="student_Email" name="student_Email" type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group">
                                            <label for="student_Contact" class="control-label mb-1">Contact Number</label>
                                            <input id="student_Contact" name="student_Contact" type="text" class="form-control" placeholder="Optional">
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group">
                                            <label for="student_Password" class="control-label mb-1">Password</label>
                                            <input id="student_Password" name="student_Password" type="password" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group">
                                            <label for="student_ID" class="control-label">School ID Number</label>
                                            <input id="student_ID" name="student_ID" type="text" class="form-control" required>
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
        </div>
    </div>
</body>
<?php require('../views/footer.php');
?>