<?php require_once('session_controller.php');?>
<?php require_once('db_connect.php');?>

<?php
		if(isset($_POST['btnConfirmStudent'])){  
			addStudent();
		}
		if(isset($_POST['btnConfirmSched'])){  
			addSchedule();
		}
		if(isset($_POST['btnEditStudent'])){  
			editStudent();
		}
		if(isset($_POST['btnEditSched'])){  
			editSched();
		}
		if(isset($_POST['class_ID'])) {
			fetchSched($_POST['class_ID']);
		}	
		if(isset($_GET['this-schedule'])){   
			removeSchedule($_GET['this-schedule']);
		}
		if(isset($_GET['delete-student']) AND isset($_GET['classid'])){
			deleteStudent($_GET['classid'],$_GET['delete-student']);
		}

		if(isset($_GET['this-appointment'])){  
			removeAppointment($_GET['this-appointment']);
		}

function loadClassSched($emp_id){
	$conn = myConnect();
		if (isset($_GET['classid'])) {

			$class_ID = $_GET['classid'];
			$sql = "SELECT * FROM data_teacher WHERE emp_ID = $emp_id AND class_ID = $class_ID";
			$result = mysqli_query($conn,$sql);
			$row=mysqli_fetch_row($result);
			return $row;

		}else{
		$sql = "SELECT * FROM data_teacher WHERE emp_ID = $emp_id";
		$result = mysqli_query($conn,$sql);
			while($row=mysqli_fetch_array($result)){	
				//do something as long as there's a remaining row.
				$rows[] = $row;
			}
		return $rows;
		}
}

function loadClassStudent($emp_id){
	$conn = myConnect();
	$class_ID = $_GET['classid'];
	$sql = "SELECT data_student.* FROM data_student JOIN data_class ON data_student.student_ID =data_class.student_ID AND data_class.class_ID = $class_ID";
	$result = mysqli_query($conn,$sql);

	return $result;
}

function loadStudentsModal(){
	$conn = myConnect();
	$class_ID = $_GET['classid'];
	$sql = "SELECT data_student.student_ID, 
				   data_student.student_FN, 
				   data_student.student_LN, 
				   data_student.course_code,
				   data_student.year_code,
				   data_student.student_Email
			FROM data_student INNER JOIN data_class ON data_student.student_ID !=data_class.student_ID";
	$result = mysqli_query($conn,$sql);

	return $result;
}

function editStudent(){

 	$conn = myConnect();
	$id = $_POST['student_ID']; //no value
	$lastname = $_POST['student_LN'];
	$firstname = $_POST['student_FN'];
	$course = $_POST['select-course']; 
	$year = $_POST['year_code'];
	$userid = $_SESSION['emp_ID'];

    $query="SELECT * FROM data_class (student_ID, student_LN, student_FN, course_code, year_code, emp_ID)
			 VALUES ('$id','$lastname','$firstname','$course','$year','$userid')";
    $result = mysqli_query($sql, $query);

    $id = $_GET['id'];
    $query2="SELECT * FROM data_class WHERE emp_ID='$id'";
    $result2 = mysqli_query($sql, $query2);

    $result = mysqli_query($conn,$sql);
	if($result){
		header("Location:../teacher/classlist.php");
	}else{
		echo "Unexpected Error! ".mysqli_error($conn);
	}
} 

function removeStudent($cid,$sid){

	$conn = myConnect();
	$query = "DELETE FROM data_class WHERE student_ID = '$sid'";
	$result = mysqli_query($conn, $query);
	if($result){
		echo "<script type='text/javascript'> 
		alert(' has successfully deleted!'); 
		window.location = '../teacher/view.php?classid='".$cid."' </script>";
	}else{
		echo "Unexpected Error! ".mysqli_error();
	}	
}

function addSchedule(){
	
	$conn = myConnect();
	$id = null; //no value
	$course = $_POST['select-course']; 
	$subject = $_POST['course-title']; 
	$sched = $_POST['select-sched'];
	$time = $_POST['time-from'];
	$time2 = $_POST['time-until'];
	$userid = $_SESSION["emp_ID"];

	$sql = "SELECT * FROM data_teacher WHERE class_day = '$sched' AND time_start = '$time' AND time_end = '$time2'";
	$result = mysqli_query($conn,$sql);

	if ($result){
		$str = "Unable to add schedule.";
		header("Location:../teacher/classlist.php?existSched=$str");
	}else{
		$sql = "INSERT INTO data_teacher(class_ID, course_code, course_title, class_day, time_start, time_end, emp_ID) VALUES ('$id','$course','$subject','$sched','$time','$time2','$userid')";
		$result = mysqli_query($conn,$sql);
			if($result){

				$str = "Schedule has been add successfully!";
				header("Location:../teacher/classlist.php?addedSched=$str");
			}else{
				echo "Unexpected Error! ".mysqli_error();
			}
	}
}

function editSched(){
			
	$conn = myConnect();
	$course = $_POST['select-course']; 
	$subject = $_POST['course-title']; 
	$sched = $_POST['select-sched'];
	$time = $_POST['time-from'];
	$time2 = $_POST['time-until'];
	$classid = $_POST["class-id"];
	
	$sql = "UPDATE data_teacher SET course_code='$course', course_title='$subject', class_day='$sched', time_start='$time', time_end='$time2' WHERE class_ID = '$classid'";

	$result = mysqli_query($conn, $sql);
	$str = "Schedule has been updated successfully!";

	if($result){
		header("Location:../teacher/classlist.php?updatedSched=$str");
	}else{
		echo ("Problem with SQL");
	}
}
function removeSchedule($id){
	$conn = myConnect();
	$query = "DELETE FROM data_teacher WHERE class_ID = '$id'";
	$result = mysqli_query($conn, $query);
	$str = "Class schedule has been removed";

	if($result){
	header("Location:../teacher/classlist.php?removedSched=$str");
	}else{
		echo mysql_error($conn);
	}	
}

function fetchSched($id){

	$conn = myConnect();
    $sql = "SELECT * FROM data_teacher WHERE class_ID='$id' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    while ($array = mysqli_fetch_array($result)) {
    	
    	$course = $array['course_code'];
    	$subject = $array['course_title'];
    	$schedule = $array['class_day'];
    	$time = $array['time_start'];
    	$time2 = $array['time_end'];	
    	$classid = $id;
    }
    echo '
		<div class="row">
			<div class="col-4">
				<div class="form-group">
					<label for="select-course" class="control-label mb-1">Course</label>
					<select name="select-course" id="select-course" class="form-control">
					<option value="ICT" '.(($course=="ICT")?"selected":"").'> ICT</option>
					<option value="IT"  '.(($course=="IT")?"selected":"").'> IT</option>
					<option value="IS"  '.(($course=="IS")?"selected":"").'> IS</option>
					<option value="CS"  '.(($course=="CS")?"selected":"").'> CS</option>
					</select>
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
					<label for="course-title" class="control-label mb-1">Subject</label>
					<input id="course-title" name="course-title" type="text" class="form-control" value="'.$subject.'" data-val-required="Please enter the Class Schedule"/>
					<span class="help-block" data-valmsg-for="course-title" data-valmsg-summary="true"></span>
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
					<label for="select-sched" class="control-label mb-1">Schedule</label>
					<select name="select-sched" id="select-sched" class="form-control">
						<option value="MW" 		 '.(($schedule=="MW")?"selected":"")		.'>MW</option>
						<option value="MWF"		 '.(($schedule=="MWF")?"selected":"")		.'>MWF</option>
						<option value="TTH"		 '.(($schedule=="TTH")?"selected":"")		.'>TTH</option>
						<option value="TThSat"	 '.(($schedule=="TThSat")?"selected":"")	.'>TThSat</option>
						<option value="SatSun"	 '.(($schedule=="SatSun")?"selected":"")	.'>SatSun</option>
						<option value="Monday"	 '.(($schedule=="Monday")?"selected":"")	.'>Monday</option>
						<option value="Tuesday"	 '.(($schedule=="Tuesday")?"selected":"")	.'>Tuesday</option>
						<option value="Wednesday"'.(($schedule=="Wednesday")?"selected":"")	.'>Wednesday</option>
						<option value="Thursday" '.(($schedule=="Thursday")?"selected":"")	.'>Thursday</option>
						<option value="Friday"	 '.(($schedule=="Friday")?"selected":"")	.'>Friday</option>
						<option value="Saturday" '.(($schedule=="Saturday")?"selected":"")	.'>Saturday</option>
						<option value="Sunday"	 '.(($schedule=="Sunday")?"selected":"")	.'>Sunday</option>
					</select>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-4">
				<div class="form-group">
					<label for="time-from" class="control-label mb-1">Time-Start</label>
					<input id="time-from" name="time-from" type="time" class="form-control" value="'.$time.'" min="07:30" step="1800"/>
				</div>
			</div>
			<input type="text" id="class-id" name="class-id" value="'.$classid.'"hidden>
			<div class="col-4">
				<div class="form-group">
					<label for="time-until" class="control-label mb-1">Time-End</label>
					<input id="time-until" name="time-until" type="time" class="form-control" value="'.$time2.'" max="21:00" step="1800"/>
				</div>
			</div>
		</div>';
}