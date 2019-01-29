<?php require('../controllers/session_controller.php'); if($_SESSION['emp_Privilege']!=3){header('Location: ../index.php');}?>
<?php require('../views/header.php');?>
<?php include('../controllers/admin_controller.php');?>
<?php 
$emp_ID = $_SESSION['emp_ID'];
$result = loadEmp();
?>
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

            <!--BUTTON-->
            <div class="main-content" style="left: 0;">
                <div class="row m-t-50">
                    <div class="container-fluid">
                        <div class="col-12 p-l-100">
                            <div class="table-data__tool">
                                <div class="table-data__tool-right">
                                    <a href="dashboard.php" value="Back" class="au-btn au-btn-icon au-btn--orange au-btn--small">
                                        <i class="zmdi zmdi-arrow-left"></i>Back
                                    </a>
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#modalAddEmp">
                                        <i class="zmdi zmdi-plus"></i>Add Employee
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                <!--END BUTTON-->
                    
                <!--EMPLOYEE TABLE-->
                    <div class="container-fluid">
                        <div class="col-12">
                            <div class="overview-box clearfix m-b-40 p-l-70 p-r-70">
                                <table class="table table-borderless table-striped table-earning">
                                    <thead>
                                        <tr>
                                            <th>Id number</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Privilege</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($result as $row){?>
                                        <tr>
                                            <td hidden><?php $id = $row['emp_ID'] ?></td>
                                            <td><?php echo $row['emp_ID'] ?></td>
                                            <td><?php echo $row['emp_FN']." ".$row['emp_LN']?></td>
                                            <td><?php echo $row['emp_Email']?></td>
                                            <td><?php echo $row['emp_Privilege']?></td>
                                    
                                    <td>
                                    <div class="table-data-feature">
                                        <button class="item btn-danger" onclick="removethisEmployee(<?php echo $id;?>)"><i class="zmdi zmdi-close"></i></button>
                                    </div>
                                    </td>
                                    
                                        </tr>
                                        <?php } ?>
                                    </tbody>   
                                </table>
                            </div>
                        </div>
                    </div>
                        <!--END EMPLOYEE TABLE -->
                </div>
                <!--COPYRIGHT-->
                <section class="p-t-100">
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
        <div class="modal fade" id="modalAddEmp" tabindex="-1" role="dialog" aria-labelledby="addButtonModal" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addButtonModal">Add Employee</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="../controllers/admin_controller.php" method="POST">
                            <div class="row">
                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="emp_ID" class="control-label mb-1">ID Number</label>
                                        <input id="emp_ID" name="emp_ID" type="text" class="form-control" data-val="true" required/>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="emp_LN" class="control-label mb-1">Last Name</label>
                                        <input id="emp_LN" name="emp_LN" type="text" class="form-control" required/>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="emp_FN" class="control-label mb-1">First Name</label>
                                        <input id="emp_FN" name="emp_FN" type="text" class="form-control" required/>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="emp_Email" class="control-label mb-1">Email</label>
                                        <input id="emp_Email" name="emp_Email" type="text" class="form-control" required/>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="emp_Contact" class="control-label mb-1">Contact</label>
                                        <input id="emp_Contact" name="emp_Contact" type="text" class="form-control" required/>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="emp_Privilege" class="control-label mb-1">Privilege</label>
                                        <input id="emp_Privilege" name="emp_Privilege" type="text" class="form-control" required/>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="emp_Password" class="control-label mb-1">Password</label>
                                        <input id="emp_Password" name="emp_Password" type="password" class="form-control" required/>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="submit" name="btnConfirmEmployee" class="btn au-btn--orange">Confirm</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<?php require('../views/footer.php');
?>