<?php 
require('../controllers/session_controller.php'); if($_SESSION['emp_Privilege']!=3){header('Location: ../index.php');}
require('../views/header.php');require('../views/alert.php');
require('../controllers/admin_controller.php');
$emp_ID = $_SESSION['emp_ID'];
$result = loadEmp();if (($result)==0) {$noresult = 0;}?>
<body class="animsition">
    <div class="page-wrapper">
        <div class="page-container p-l-0">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop" style="left: 0;">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                        <h2 id="maindesc">Employee Data</h2>
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
            <div class="main-content">
                <div class="row m-t-50">
                    <div class="container-fluid">
                        <div class="col-12 p-l-100">
                            <div class="table-data__tool">
                                <div class="table-data__tool-right">
                                    <a href="dashboard.php" value="Back" class="au-btn au-btn-icon au-btn--orange au-btn--small">
                                        <i class="fas fa-arrow-left"></i>Back
                                    </a>
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#modalAddEmp">
                                        <i class="fas fa-plus"></i>Add Employee
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--EMPLOYEE TABLE-->
                <div class="container-fluid">
                    <div class="col-12">
                        <div class="overview-box clearfix m-b-40 p-l-70 p-r-70">
                            <div class="table-responsive table--no-card m-b-40">
                                <table class="table table-borderless table-striped table-earning">
                                    <thead>
                                        <tr>
                                            <th style="background-color: #28a745;">Id number</th>
                                            <th style="background-color: #28a745;">Name</th>
                                            <th style="background-color: #28a745;">Email</th>
                                            <th style="background-color: #28a745;text-align:center;">Privilege</th>
                                            <th style="background-color: #28a745;text-align:center;">Option</th>
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
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    <?php }else{ foreach($result as $row){?>
                                        <tr>
                                            <td><?php echo $id = $row['emp_ID'] ?></td>
                                            <td><?php echo $row['emp_FN']." ".$row['emp_LN']?></td>
                                            <td><?php echo $row['emp_Email']?></td>
                                            <td style="text-align:center;"><?php echo $row['emp_Privilege']?></td>
                                            <td style="text-align:center;">
                                                <div class="table-data-feature ">
                                                    <button class="item btn-danger" onclick="removethisEmployee(<?php echo $id;?>)"><i class="zmdi zmdi-close"></i></button>
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
                <!--END EMPLOYEE TABLE -->
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
            <!-- Modal Add Employee -->
            <div class="modal fade" id="modalAddEmp" role="dialog" aria-labelledby="addButtonModal" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addButtonModal">Add Employee</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="../controllers/admin_controller.php" method="POST">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="form-group">
                                            <label for="emp_LN" class="control-label mb-1">Last Name</label>
                                            <input id="emp_LN" name="emp_LN" type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group">
                                            <label for="emp_FN" class="control-label mb-1">First Name</label>
                                            <input id="emp_FN" name="emp_FN" type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group">
                                            <label for="emp_Email" class="control-label mb-1">Email</label>
                                            <input id="emp_Email" name="emp_Email" type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group">
                                            <label for="emp_Contact" class="control-label mb-1">Contact</label>
                                            <input id="emp_Contact" name="emp_Contact" type="text" class="form-control" placeholder="Optional">
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group">
                                            <label for="emp_Privilege" class="control-label mb-1">Employee Privilege</label>
                                            <select name="course_code" id="course_code" class="form-control" required>
                                                <option value=""></option>
                                                <option value="1">Guidance</option>
                                                <option value="2">Teacher</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group">
                                            <label for="emp_Password" class="control-label mb-1">Password</label>
                                            <input id="emp_Password" name="emp_Password" type="password" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group">
                                            <label for="emp_ID" class="control-label mb-1">ID Number</label>
                                            <input id="emp_ID" name="emp_ID" type="text" class="form-control" data-val="true" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" name="btnConfirmEmployee" class="btn au-btn--orange">Confirm</button>
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