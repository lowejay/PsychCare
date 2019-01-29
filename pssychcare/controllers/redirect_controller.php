<?php require('session_controller.php');?>
<?php
			if($_SESSION['user_Privilege'] == 1){
			header('Location: ../guidance/dashboard.php');
		}
			if($_SESSION['user_Privilege'] == 2){
			header('Location: ../teacher/dashboard.php');
		}
			if($_SESSION['user_Privilege'] == 3){
			header('Location: ../student/dashboard.php');
		}