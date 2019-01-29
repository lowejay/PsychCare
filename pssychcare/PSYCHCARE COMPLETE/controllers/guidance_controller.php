<?php require_once('session_controller.php');?>
<?php require_once('db_connect.php');?>
<?php
		if(isset($_POST['btnConfirmSched'])){  
			addNewSched();
		}
		if(isset($_GET['this-appointment'])){  
			removeAppointment($_GET['this-appointment']);
		}

		if(isset($_GET['done-appointment'])){  
			setDoneAppointment($_GET['done-appointment']);
		}
		if (isset($_POST['saveProfilePost'])) {
			saveGuidanceProfile();
		}
		if (isset($_POST['changePassPost'])) {
			changePassword();
		}

		
		
function loadVacantAppointments($user_ID){
			$conn = myConnect();
			$id = $user_ID;
			$sql = "SELECT * FROM data_appointment WHERE emp_ID = $id AND appointment_status = 'vacant'";

			$result = mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)==0){

			}else{
			while($row=mysqli_fetch_array($result)){	
				//do something as long as there's a remaining row.
				$rows[] = $row;

			}
			return $rows;
	}
}

function loadOccupiedAppointments($user_ID){
	$conn = myConnect();
	$id = $user_ID;
	$sql = "SELECT data_student.student_FN, data_student.student_LN, data_appointment.*
			FROM data_appointment
			JOIN data_student
			ON data_student.student_ID=data_appointment.student_ID WHERE emp_ID = '$id' AND appointment_status ='occupied'";
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

function loadCompletedAppointments($user_ID){
			$conn = myConnect();
			$id = $user_ID;
			$sql = "SELECT data_student.student_FN, data_student.student_LN, data_appointment.*
					FROM data_appointment
					JOIN data_student
					ON data_student.student_ID=data_appointment.student_ID WHERE emp_ID = $id AND appointment_status ='cancelled' OR appointment_status = 'done'";
			$result = mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)==0){

			}else{
			while($row=mysqli_fetch_array($result)){	
				//do something as long as there's a remaining row.
				$rows[] = $row;

			}
			return $rows;
	}
}
function addNewSched(){
	
	$conn = myConnect();
	$schedid = null; //no value
	$userid = $_SESSION["emp_ID"];
	$date = $_POST['date-of-sched']; 
	$time = $_POST['time-from'];
	$time2 = $_POST['time-until'];
	$status = "vacant";
	$cont = $_POST["contact_no"];

	if ($time >= $time2){
		$str = "End time must be greater than time start!";
		header("Location:../guidance/dashboard.php?errorSched=$str");
	}else{
		$str = "New schedule has been added.";
		$sql = "INSERT INTO data_appointment(schedule_ID, emp_ID, date_available, time_start, time_end, contact_no, appointment_status) VALUES ('$schedid','$userid','$date','$time','$time2','$cont','$status')";

		$result = mysqli_query($conn,$sql);
		if($result){
			header("Location:../guidance/dashboard.php?addSched=$str");
		}else{
			echo "Unexpected Error! ".mysqli_error($conn);
		}
	}
}
function removeAppointment($id){

	$conn = myConnect(); //no value
	$query = "UPDATE data_appointment SET appointment_status='cancelled' WHERE appointment_ID = '$id'";
	$result = mysqli_query($conn, $query);
	$str = "Appointment schedule was cancelled";

	if($result){
	header("Location:../guidance/dashboard.php?appointment=$str");
	}else{
		echo mysqli_error($conn);
	}	
}

function setDoneAppointment($id){
	$conn = myConnect();
	$sql = "UPDATE data_appointment SET appointment_status='done' WHERE appointment_ID='$id'";
	$result = mysqli_query($conn,$sql);
	$str = "Appointment schedule status updated!";

	if($result){
	header("Location:../guidance/dashboard.php?update-appointment=$str");
	}else{
		echo mysqli_error($conn);
	}	
}
 function saveGuidanceProfile(){
 	$conn = myConnect();
 	$emp_ID = $_POST['emp_ID'];
 	$fname = $_POST['fname'];
 	$lname = $_POST['lname'];
 	$email = $_POST['email'];
	$str = "Profile updated!";
 	$sql = "UPDATE data_employee SET emp_FN = '$fname', emp_LN = '$lname', emp_Email = '$email' WHERE emp_ID = '$emp_ID'";
 	$result = mysqli_query($conn,$sql);
	if($result){
		$_SESSION['emp_FN'] = $fname;
		$_SESSION['emp_LN'] = $lname;
		$_SESSION['email'] = $email;
		
	header("Location:../guidance/profile.php?update-profile=$str");
	}else{
		echo mysqli_error($conn);
	}	
}
function changePassword () {
	$conn = myConnect();
	$loginID =  mysqli_real_escape_string($conn,$_POST['emp_ID']);
	$loginpassword = mysqli_real_escape_string($conn,$_POST['cur_pass']);
	$newloginpassword = mysqli_real_escape_string($conn,$_POST['new_pass']);
	$confirmpassword = mysqli_real_escape_string($conn,$_POST['con_pass']);
	$salt = "sAlTyTeXt";
	
		// bai sa pasword i check if sakto ang curent pag dili prompt error. nya ihash pareho sa gi hash nimo sa pag create sa students nya i check if ang new pass ug confirm pass sakto.

	 	$sql = "SELECT * FROM data_employee 
				WHERE (emp_ID = '$loginID') 
				AND emp_Password = SHA2(CONCAT('$loginpassword','$salt'),512) LIMIT 1";
	 	$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result) == 1){
			
		if ($newloginpassword != $confirmpassword){
		$str1="password does not match!";
		header("Location:../guidance/profile.php?wrong-profileGuidance=$str1");
		}else if
		(mysqli_query($conn, $query2 = "UPDATE data_employee 
									  SET emp_Password = SHA2(CONCAT('$newloginpassword','$salt'),512) 
									  WHERE emp_ID = '$loginID'")); 
		$str ="profile updated!";
		$result2 = mysqli_query($conn, $query2);
		if($result2)
		header("Location:../guidance/profile.php?update-profileGuidance=$str");
	}
}
?>