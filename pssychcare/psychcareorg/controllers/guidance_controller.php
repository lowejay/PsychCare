<?php require_once('session_controller.php');?>
<?php require_once('db_connect.php');?>
<?php
		if(isset($_POST['btnConfirmSched'])){  
			addNewSched();
		}

function loadAppointments($user_ID){
			$conn = myConnect();
			$id = $user_ID;
			$sql = "SELECT * FROM appointment_data WHERE user_ID = $id ";
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
	$cont = $_POST["contact_no"];

	$sql = "INSERT INTO appointment_data(schedule_ID, user_ID, date_available, time_start, time_end, contact_no) VALUES ('$schedid','$userid','$date','$time','$time2','$cont')";

	$result = mysqli_query($conn,$sql);
	if($result){
		header("Location:../guidance/appointment.php");
	}else{
		echo "Unexpected Error! ".mysqli_error($conn);
	}
}
	
?>