<?php require_once('session_controller.php');?>
<?php require_once('db_connect.php');?>
<?php
		if(isset($_POST['btnConfirmStudent'])){  
			addMyStudent();
		}

function loadClassList($user_ID){
			$conn = myConnect();
			$id = $user_ID;
			$sql = "SELECT * FROM teacher_data WHERE emp_ID = $id ";
			$result = mysqli_query($conn,$sql);

			while($row=mysqli_fetch_array($result)){	
				//do something as long as there's a remaining row.
				$rows[] = $row;

			}
			return $result;

}

function addMyStudent(){
	
	$conn = myConnect();
	$id = null; //no value
	$course = $_POST['select-course']; 
	$subject = $_POST['course-title']; 
	$sched = $_POST['select-sched'];
	$time = $_POST['time-from'];
	$time2 = $_POST['time-until'];
	$userid = $_SESSION["emp_ID"];

	$sql = "INSERT INTO teacher_data(class_ID, course_code, course_title, class_day, time_start, time_end, emp_ID) VALUES ('$id','$course','$subject','$sched','$time','$time2','$userid')";

	$result = mysqli_query($conn,$sql);
	if($result){
		header("Location:../teacher/classlist.php");
	}else{
		echo "Unexpected Error! ".mysqli_error($conn);
	}
}