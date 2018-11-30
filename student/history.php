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
                        <div class="row">
                            <div class="col-12">
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light">
                                             <button class="au-btn au-btn-icon au-btn--orange au-btn--small" data-toggle="collapse" data-target="#pd">Psychological Test</button>
                                        </div>
                                        <div class="rs-select2--light">
                                           <button class="au-btn au-btn-icon au-btn--orange au-btn--small" href="../student/historyPersonality.php"> Personality Test</button>
                                        </div>
                                        <div class="rs-select2--light">
                                           <button class="au-btn au-btn-icon au-btn--orange au-btn--small" href="../student/historyLearner.php">Types of Learner</button>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="p-b-20">Result for:  Psychological Disorder</h3>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>ID Number</th>
                                                <th>Date</th>
                                                <th>Score</th>
                                                <th>result View</th>
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
       </div>
   </div>
</body>     


<?php require('../views/footer.php');?>