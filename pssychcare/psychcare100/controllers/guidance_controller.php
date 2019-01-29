<?php require_once('session_controller.php');?>
<?php require_once('db_connect.php');?>
<?php
		if(isset($_POST['btnConfirmSched'])){  
			addNewSched();
		}
		if(isset($_GET['this-appointment'])){  
			removeAppointment($_GET['this-appointment']);
		}
		
function loadVacantAppointments($user_ID){
			$conn = myConnect();
			$id = $user_ID;
			$sql = "SELECT * FROM data_appointment WHERE emp_ID = $id AND appointment_status = 'vacant'";
			$result = mysqli_query($conn,$sql);

			while($row=mysqli_fetch_array($result)){	
				//do something as long as there's a remaining row.
				$rows[] = $row;
			}
			return $result;
}

function loadOccupiedAppointments($user_ID){
			$conn = myConnect();
			$id = $user_ID;
			$sql = "SELECT data_student.student_FN, data_student.student_LN, data_appointment.*
					FROM data_appointment
					JOIN data_student
					ON data_student.student_ID=data_appointment.student_ID WHERE emp_ID = $id AND appointment_status ='occupied'";
			$result = mysqli_query($conn,$sql);
			while($row=mysqli_fetch_array($result)){	
				//do something as long as there's a remaining row.
				$rows[] = $row;
			}
			return $result;
}


function loadCompletedAppointments($user_ID){
			$conn = myConnect();
			$id = $user_ID;
			$sql = "SELECT data_student.student_FN, data_student.student_LN, data_appointment.*
					FROM data_appointment
					JOIN data_student
					ON data_student.student_ID=data_appointment.student_ID WHERE emp_ID = $id AND appointment_status ='cancelled'";
			$result = mysqli_query($conn,$sql);
			while($row=mysqli_fetch_array($result)){	
				//do something as long as there's a remaining row.
				$rows[] = $row;
			}
			return $result;
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
	$query = "DELETE FROM data_appointment WHERE schedule_ID = '$id'";
	$result = mysqli_query($conn, $query);
	$str = "Appointment schedule was removed";

	if($result){
	header("Location:../guidance/dashboard.php?appointment=$str");
	}else{
		echo mysqli_error($conn);
	}	
}

function setDoneAppointment($id){
	$conn = myConnect();
	$sql = "UPDATE data_appointment SET appointment_status= 2 WHERE schedule_ID='$id'";
	$result = mysqli_query($conn,$sql);
	if($result){
		header("Location:../guidance/dashboard.php");
	}else{
		echo "Unexpected Error! ".mysqli_error($conn);
	}
	
}
?>