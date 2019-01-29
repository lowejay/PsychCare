<?php require('../controllers/session_controller.php'); if(!$_SESSION['user_ID']){header('Location: ../index.php');}?>
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> PsychCare </title>
</head> 
    <!-- Fontfaces CSS-->
    <link href="../css/font-face.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../css/theme.css" rel="stylesheet" media="all">
<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="survey.php">
                            <img src="../images/logo-landscape.png" width="165" height="50"  alt="PsychCare" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="survey.php">
                    <img src="../images/logo-landscape.png" width="175" height="20" alt="PsychCare" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list"> 
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-25">
                                <br><br><br>
                                <div class="overview-wrap">
                                    <h2 class="title-1">Categories</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-26">
                            <div class="col-sm-6 col-lg-3">   
                                <a href = "dreams.php">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                 <i class="fas fa-cloud"></i>
                                            </div>
                                            <div class="text">                                               
                                                <h2>1,368</h2>
                                                <span>Interpretation of Dreams</span>                                            
                                            </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             
                            <div class="col-sm-6 col-lg-3">
                                <a href = "learners.php">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="fas fa-lightbulb-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>8,688</h2>
                                                <span>Kinds of Learner</span>                                          
                                            </div> 
                                            </a>              
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <a href = "personalities.php">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                               <i class="zmdi zmdi-face"></i>
                                            </div>
                                            <div class="text">
                                                <h2>1,086</h2>
                                                <span>Personality Test</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                </div>
                            </div>
                             
                            <div class="col-sm-6 col-lg-3">
                                <a href = "disorders.php">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                              <i class="fas fa-code-branch"></i>
                                            </div>
                                            <div class="text">
                                                <h2>1,060</h2>
                                                <span>Psychological Disorder</span></div>
                                            
                                            </div>                  
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>


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
       </div>
     </div>
 </div>
</div>
</div>
</body> 
<?php require('../views/footer.php');
?>