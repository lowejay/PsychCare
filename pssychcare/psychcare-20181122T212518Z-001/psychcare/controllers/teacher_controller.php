<?php require_once('session_controller.php');?>
<?php require_once('db_connect.php');?>

<?php
		if(isset($_POST['btnConfirmSched'])){  
			addMySched();
		}
		if(isset($_GET['delete-sched'])){  
			deleteSched();
		}
		if(isset($_POST['modaladdsubmit'])){
			addmStudent();
		}
		if(isset($_POST['btnEditSched'])){  
			editSched();
		}
		if (isset($_POST['class_ID'])) {
			removeSchedule($_GET['this-schedule']);
		}
		if (isset($_POST['class_ID'])) {
			fetchSched($_POST['class_ID']);
		}
		if(isset($_GET['delete-student']) AND isset($_GET['classid'])){  
			deleteStudent($_GET['classid'],$_GET['delete-student']);
		}
		if(isset($_GET['delete-student'])){  
			$cid = $_GET['classid']; 
			$sid = $_GET['delete-student'];
			deleteStudent($cid,$sid);
		}
		if (isset($_POST['saveProfilePost'])) {
			saveTeacherProfile();
		}
		if (isset($_POST['changePassPost'])) {
			changePassword();
		}

function loadClassSched($emp_id){
	$conn = myConnect();
	if (isset($_GET['classid'])) { //USED TO DISPLAY SCHEDULE INSIDE VIEW.PHP
		$class_ID = $_GET['classid'];
		$sql = "SELECT * FROM data_class_sched WHERE emp_ID = '$emp_id' AND class_ID = $class_ID";
		$result = mysqli_query($conn,$sql);
		$row=mysqli_fetch_row($result);
		return $row;

	}else{ //USED TO QUERY CLASS SCHEDULES INSIDE CLASSLIST.PHP
		$sql = "SELECT * FROM data_class_sched WHERE emp_ID = '$emp_id'";
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)!=0){
			while($row=mysqli_fetch_array($result)){	
				//do something as long as there's a remaining row.
				$rows[] = $row;
			}
			return $rows;
		}else{
			return 0;
		}
	}
}

function loadClassStudent($emp_id){
	$conn = myConnect();
	$class_ID = $_GET['classid'];
	$sql = "SELECT data_student.* FROM data_student JOIN data_class_list ON data_student.student_ID =data_class_list.student_ID AND data_class_list.class_ID = $class_ID";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)){
		while($row=mysqli_fetch_array($result)){	
			//do something as long as there's a remaining row.
			$rows[] = $row;
		}
		return $rows;
	}else{
		return 0;
	}
}

function addMySched(){
	
	$conn = myConnect();
	$id = null; //no value
	$course = $_POST['select-course']; 
	$subject = $_POST['course-title']; 
	$sched = $_POST['select-sched'];
	$time = $_POST['time-from'];
	$time2 = $_POST['time-until'];
	$userid = $_SESSION["emp_ID"];

	$sql = "INSERT INTO data_class_sched (class_ID, course_code, course_title, class_day, time_start, time_end, emp_ID) VALUES ('$id','$course','$subject','$sched','$time','$time2','$userid')";

	$result = mysqli_query($conn,$sql);
	if($result){
		header("Location:../teacher/classlist.php");
	}else{
		echo "Unexpected Error1! ".mysqli_error($conn);
	}
}

function deleteSched(){
	$conn = myConnect();
	$id = $_GET['delete-sched']; //no value
	$query = "DELETE FROM data_class_sched WHERE class_ID = '$id'";
	$result = mysqli_query($conn, $query);
	
	if($result){
		echo "<script type='text/javascript'> alert('Class has successfully deleted!'); 
		window.location = '../teacher/classlist.php' </script>";
	}else{
		echo mysql_error();
	}
} 
function addmStudent(){
	$conn = myConnect();
	$SID = $_POST['SID'];
	$CID = $_POST['CID'];
	$ed = $_POST['ed'];
	$sql = "INSERT INTO data_class_list (class_ID, student_ID, emp_ID) VALUES ('$CID','$SID','$ed')";

	$result = mysqli_query($conn,$sql);

	if($result){
		header("Location: ../teacher/view.php?classid=".$CID."");
	}else{
		echo 'false';
	}
}

function editStudent(){

 	$conn = myConnect();
	$id = $_POST['student_ID']; //no value
	$lastname = $_POST['student_LN'];
	$firstname = $_POST['student_FN'];
	$course = $_POST['select-course']; 
	$year = $_POST['year_code'];
	$userid = $_SESSION['emp_ID'];

    $query="SELECT * FROM data_class_list (student_ID, student_LN, student_FN, course_code, year_code, emp_ID)
			 VALUES ('$id','$lastname','$firstname','$course','$year','$userid')";
    $result = mysqli_query($sql, $query);

    $id = $_GET['id'];
    $query2="SELECT * FROM data_class_list WHERE emp_ID='$id'";
    $result2 = mysqli_query($sql, $query2);

    $result = mysqli_query($conn,$sql);
	if($result){
		header("Location:../teacher/classlist.php");
	}else{
		echo "Unexpected Error2! ".mysqli_error($conn);
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
	
	$sql = "UPDATE data_class_sched SET course_code='$course', course_title='$subject', class_day='$sched', time_start='$time', time_end='$time2' WHERE class_ID = '$classid'";

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
	$query = "DELETE FROM data_class_sched WHERE class_ID = '$id'";
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
    $sql = "SELECT * FROM data_class_sched WHERE class_ID='$id' LIMIT 1";
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

function retrieveSched($sched_ID){

	$conn = myConnect();
	$id = $sched_ID;

    $sql = "SELECT * FROM data_class_sched WHERE class_ID='$id'";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($result);
	return $row;
}
function deleteStudent($cid,$sid){
	$conn = myConnect();
	$query = "DELETE FROM data_class_list WHERE student_ID = '$sid'";
	$result = mysqli_query($conn, $query);
	if($result){
		echo "<script type='text/javascript'> alert(' has successfully deleted!'); 
		window.location = '../teacher/view.php?classid='".$cid."' </script>";
	}else{
		echo "Unexpected Error3! ".mysqli_error();
	}	
}

function loadHistory($emp_ID){
	
	$conn = myConnect();
	$id = $emp_ID;
	$sql = "SELECT * FROM data_history 
			WHERE student_ID 
			IN(SELECT student_ID FROM data_class_list WHERE emp_ID = '$id')
			GROUP BY student_ID";
	$result = mysqli_query($conn, $sql);
	return $result;
}
 function saveTeacherProfile(){
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
		
	header("Location:../teacher/profile.php?update-profileTeach=$str");
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
		header("Location:../teacher/profile.php?wrong-profileTeach=$str1");
		}else if
		(mysqli_query($conn, $query2 = "UPDATE data_employee 
									  SET emp_Password = SHA2(CONCAT('$newloginpassword','$salt'),512) 
									  WHERE emp_ID = '$loginID'")); 
		$str ="profile updated!";
		$result2 = mysqli_query($conn, $query2);
		if($result2)
		header("Location:../teacher/profile.php?update-profileTeach=$str");
	}
}
?>