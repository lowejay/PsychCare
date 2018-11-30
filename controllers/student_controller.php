<?php require_once('session_controller.php');?>
<?php require_once('db_connect.php');?>
<?php
		if(isset($_GET['add-appointment'])){  
			addthisAppointment($_GET['add-appointment']);
		}
		if (isset($_POST['saveProfilePost'])) {
			saveStudentProfile();
		}
		if (isset($_POST['changePassPost'])) {
			changePassword();
		}
	
function addthisAppointment($id){
	$conn = myConnect();
	$userid = $_SESSION['student_ID'];
	$sql = "UPDATE data_appointment SET student_ID ='$userid', appointment_status = 'occupied' WHERE appointment_ID='$id'";
	$result = mysqli_query($conn,$sql);
	if($result){
		$str = "Appointment added";
		header("Location:../student/myappointments.php?adds=$str");
	}else{
		echo mysqli_error($conn);
	}	
}

function loadVacantAppointments($user_ID){
	$conn = myConnect();
	$id = $user_ID;
	$sql = "SELECT data_employee.emp_FN, data_employee.emp_LN, data_appointment.*
			FROM data_appointment
			JOIN data_employee
			ON data_employee.emp_ID=data_appointment.emp_ID WHERE appointment_status ='vacant'";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)==0){
		return 0;
	}else{
		while($row=mysqli_fetch_array($result)){	
			//do something as long as there's a remaining row.
			$rows[] = $row;

		}
	return $rows;
	}
}
function loadMyAppointments($user_ID){
	$conn = myConnect();
	$id = $user_ID;
	$sql = "SELECT data_employee.emp_FN, data_employee.emp_LN, data_appointment.*
			FROM data_appointment
			JOIN data_employee
			ON data_employee.emp_ID=data_appointment.emp_ID WHERE student_ID = $id AND appointment_status = 'occupied'";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)==0){
		return 0;
	}else{
		while($row=mysqli_fetch_array($result)){	
			//do something as long as there's a remaining row.
			$rows[] = $row;

		}
	return $rows;
	}
}
function loadDoneAppointments($user_ID){

			$conn = myConnect();
			$id = $user_ID;
			$sql = "SELECT data_employee.emp_FN, data_employee.emp_LN, data_appointment.*
					FROM data_appointment
					JOIN data_employee
					ON data_employee.emp_ID=data_appointment.emp_ID WHERE student_ID = $id AND (appointment_status !='occupied' AND appointment_status !='vacant') ";
			$result = mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)==0){
				return 0;
			}else{
			while($row=mysqli_fetch_array($result)){
				$rows[] = $row;
			}
			return $rows;
	}
}
function loadHistory1($user_ID){

	$conn = myConnect(); 
	$id = $user_ID;
	$sql = "SELECT * FROM data_history WHERE student_ID = $id AND score_learner IS NOT NULL
			ORDER BY data_history.history_date DESC";
	$result = mysqli_query($conn,$sql);
	
		if(mysqli_num_rows($result)==0){
			return 0;
		}else{
		while($row=mysqli_fetch_array($result)){
			$rows[] = $row;
		}
		return $rows;
	}
}
function loadHistory2($user_ID){

	$conn = myConnect(); 
	$id = $user_ID;
	$sql = "SELECT * FROM data_history WHERE student_ID = $id AND score_personality >-0
			ORDER BY data_history.history_date DESC";
	$result = mysqli_query($conn,$sql);
	
		if(mysqli_num_rows($result)==0){
			return 0;
		}else{
		while($row=mysqli_fetch_array($result)){
			$rows[] = $row;
		}
		return $rows;
	}
}	
function loadHistory3($user_ID){
	$conn = myConnect(); 
	$id = $user_ID;
	$sql = "SELECT * FROM data_history WHERE student_ID = $id AND score_psychological >= 0 
			ORDER BY data_history.history_date DESC";
	$result = mysqli_query($conn,$sql);
	
		if(mysqli_num_rows($result)==0){
			return 0;
		}else{
		while($row=mysqli_fetch_array($result)){	
			//do something as long as there's a remaining row.
			$rows[] = $row;

		}
		return $rows;
	}
}
 function saveStudentProfile(){
 	$conn = myConnect();
 	$id = $_POST['student_ID'];
 	$fname = $_POST['fname'];
 	$lname = $_POST['lname'];
 	$email = $_POST['email'];
	$str = "Profile updated!";
 	$sql = "UPDATE data_student SET student_FN = '$fname', student_LN = '$lname', student_Email = '$email' WHERE student_ID = '$id'";
 	$result = mysqli_query($conn,$sql);
	if($result){
		$_SESSION['student_FN'] = $fname;
		$_SESSION['student_LN'] = $lname;
		$_SESSION['student_Email'] = $email;
		
	header("Location:../student/profile.php?update-profileStudent=$str");
	}else{
		echo mysqli_error($conn);
	}	
}
function changePassword () {
	$conn = myConnect();
	$loginID =  mysqli_real_escape_string($conn,$_POST['student_ID']);
	$loginpassword = mysqli_real_escape_string($conn,$_POST['cur_pass']);
	$newloginpassword = mysqli_real_escape_string($conn,$_POST['new_pass']);
	$confirmpassword = mysqli_real_escape_string($conn,$_POST['con_pass']);
	$salt = "sAlTyTeXt";
	
		// bai sa pasword i check if sakto ang curent pag dili prompt error. nya ihash pareho sa gi hash nimo sa pag create sa students nya i check if ang new pass ug confirm pass sakto.

	 	$sql = "SELECT * FROM data_student
				WHERE (student_ID = '$loginID') 
				AND student_Password = SHA2(CONCAT('$loginpassword','$salt'),512) LIMIT 1";
	 	$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result) == 1){
			
		if ($newloginpassword != $confirmpassword){
		$str1="password does not match!";
		header("Location:../student/profile.php?wrong-profileStudent=$str1");
		}else if
		(mysqli_query($conn, $query2 = "UPDATE data_student 
									  SET student_Password = SHA2(CONCAT('$newloginpassword','$salt'),512) 
									  WHERE student_ID = '$loginID'")); 
		$str ="profile updated!";
		$result2 = mysqli_query($conn, $query2);
		if($result2)
		header("Location:../student/profile.php?update-profileStudent=$str");
	}
}		