<?php require('db_connect.php');?>
<?php require('session_controller.php');?>
<?php
	$conn = myConnect();
	if(isset($_POST['btnLoginSubmit'])){
	$loginID =  mysqli_real_escape_string($conn,$_POST['loginID']);
	$loginpassword = mysqli_real_escape_string($conn,$_POST['loginPassword']);
	$salt = "sAlTyTeXt";
	//query for employee data
	$sql = "SELECT * FROM data_employee 
			WHERE (emp_ID = '$loginID' OR emp_Email ='$loginID') 
			AND emp_Password = SHA2(CONCAT('$loginpassword','$salt'),512) LIMIT 1"; //query statement
	$result= mysqli_query($conn,$sql);
	if (mysqli_num_rows($result) == 0){ //if not employee
    	//query for student data
    	$sql = "SELECT * FROM data_student 
    			WHERE student_ID = '$loginID'
    			AND student_Password = SHA2(CONCAT('$loginpassword','$salt'),512) LIMIT 1"; //query statement
			$result= mysqli_query($conn,$sql);
			if (mysqli_num_rows($result) == 0){
				$str = "Oops!";
				header("Location:../views/login.php?x=$str");
			}else{
				while($row = mysqli_fetch_assoc($result)) {
				setStuSess($row['student_ID'],$row['student_FN'],$row['student_LN'],$row['student_Email'],$row['student_Contact'],$row['user_Privilege'],$row['student_Password']);
				header('Location: redirect_controller.php');
				}
			}
			mysqli_close($conn);
	}else{ //proceed to employee
		while($row = mysqli_fetch_assoc($result)) {
		setEmpSess($row['emp_ID'],$row['emp_FN'],$row['emp_LN'],$row['emp_Email'],$row['emp_Contact'],$row['emp_Privilege'],$row['emp_Password']);
		header('Location: redirect_controller.php');
		}
	}
	mysqli_close($conn);
}