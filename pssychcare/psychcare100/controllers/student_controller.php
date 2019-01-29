<?php require_once('session_controller.php');?>
<?php require_once('db_connect.php');?>
<?php
		if(isset($_GET['id'])){ 
			addAppointment();
		}

function addAppointment(){
	$conn = myConnect();
	$schedid = $_GET['id'];
	$userid = $_SESSION['student_ID'];
	
	$sql = "UPDATE data_appointment SET student_ID='$userid', appointment_status= '1' WHERE schedule_ID='$schedid'";
	$result = mysqli_query($conn,$sql);
	if($result){
		header("Location:../student/myappointments.php");
	}else{
		echo "Unexpected Error! ".mysqli_error($conn);
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

			while($row=mysqli_fetch_array($result)){	
				//do something as long as there's a remaining row.
				$rows[] = $row;

			}
			return $result;
}

function loadMyAppointments($user_ID){

			$conn = myConnect();
			$id = $user_ID;
			$sql = "SELECT data_employee.emp_FN, data_employee.emp_LN, data_appointment.*
					FROM data_appointment
					JOIN data_employee
					ON data_employee.emp_ID=data_appointment.emp_ID WHERE student_ID = $id";
			$result = mysqli_query($conn,$sql);

			while($row=mysqli_fetch_array($result)){	
				//do something as long as there's a remaining row.
				$rows[] = $row;

			}
			return $result;

}
