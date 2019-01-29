<?php require('../controllers/session_controller.php'); if(!$_SESSION['student_ID']){header('Location: ../index.php');}?>
<?php require('../views/header.php');?>
<?php require('navbars.php') ?>
<?php require('../controllers/student_controller.php');
$user_ID = $_SESSION['student_ID'];
$result1 = loadHistory1($user_ID);if (($result1)==0) {$noresult1 = 0;}
$result2 = loadHistory2($user_ID);if (($result2)==0) {$noresult2 = 0;}
$result3 = loadHistory3($user_ID);if (($result3)==0) {$noresult3 = 0;}

?>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                                <h2 id="maindesc">Test Result History</h2>
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
            <div class="main-content p-t-100">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                                    <h3>Category:  Psychological Disorder</h3>
                            <div class="col-12">
                                <div class="table-responsive table-responsive-data2">
                                    <br>
                                    <a href="../student/dashboard.php">
                                        <button class="au-btn au-btn-icon au-btn--orange au-btn--small">
                                            <i class="zmdi zmdi-arrow-left"></i>back
                                        </button>
                                        <br>
                                    <a href="../student/history.php">
                                        <button class="au-btn au-btn-icon au-btn--orange au-btn--small">
                                            Disorder
                                        </button>
                                        <br>
                                    <a href="../student/historyPersonality.php">
                                        <button class="au-btn au-btn-icon au-btn--orange au-btn--small">
                                            personality
                                        </button>
                                        <br>
                                    <a href="../student/historyLearner.php">
                                        <button class="au-btn au-btn-icon au-btn--orange au-btn--small">
                                            Learners
                                        </button>
                                        <br>
                                    </a>
                                    <br>
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>ID Number</th>
                                                <th>Date</th>
                                                <th>Score</th>
                                                <th align="right">result View</th>
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
                                        <?php }else{ 
                                            foreach ($result3 as $row) {?> 
                                            <tr>
                                                <td><?php echo $row['student_ID'];?></td>
                                                <td><?php echo date('M d, Y ',strtotime($row['history_date']))?></td>
                                                <td><?php echo $row['score_psychological'];?></td>
                                                <td>
                                                    <div class="table-data-feature" style="justify-content: center !important;">
                                                        <button class="item" data-placement="top" title="View" type="button" data-id="IDr" data-toggle="modal" data-target="#viewModal">
                                                                <i class="zmdi zmdi-eye"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr> 
                                              <?php  }} ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
    <?php require('historydata.php'); ?>
</body>     


<?php require('../views/footer.php');?>