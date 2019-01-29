<?php 
    if($_SESSION != NULL){
            if($_SESSION['emp_Privilege'] == 1){
            require('../guidance/navbars.php');
        }else
            if($_SESSION['emp_Privilege'] == 2){
            require('../teacher/navbars.php');
        }else
            if($_SESSION['emp_Privilege'] == 3){
            require('../admin/navbars.php');
        }else
            if($_SESSION['user_Privilege'] == null){
            require('../student/navbars.php');
        }else
            if($_SESSION['user_Privilege'] == 0 AND $_SESSION['emp_Privilege'] == 0){
            ?>
            <script type="text/javascript">
            window.location = "../index.php"
            window.alert("Sorry, the page you want to visit isn't available right now.");         
            </script>
        <?php
        }
    }
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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