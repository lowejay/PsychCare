<?php require('session_controller.php');

	if(isset($_SESSION) AND $_SESSION != NULL){

			if($_SESSION['emp_Privilege'] == 1){
			header('Location: ../guidance/dashboard.php');
		}else
			if($_SESSION['emp_Privilege'] == 2){
			header('Location: ../teacher/dashboard.php');
		}else
			if($_SESSION['emp_Privilege'] == 3){
			header('Location: ../admin/dashboard.php');
		}else
			if($_SESSION['user_Privilege'] == null){
			header('Location: ../student/dashboard.php');
		}else 
		    if($_SESSION['user_Privilege'] == 0 AND $_SESSION['emp_Privilege'] == 0){
			header('Location: ../views/acconfirm.php');
		}
	}