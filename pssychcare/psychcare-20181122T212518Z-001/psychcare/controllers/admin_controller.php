<?php require_once('session_controller.php');?>
<?php require_once('db_connect.php');?>

<?php

	if(isset($_POST['btnConfirmStudent'])){  
			addStudent();
		}
	if(isset($_POST['btnConfirmEmployee'])){  
			addEmployee();
		}	
	if(isset($_GET['this-student'])){
			removeStudent($_GET['this-student']); 
		}
	if(isset($_GET['this-employee'])){  
			removeEmployee($_GET['this-employee']);
		}
	if (isset($_POST['saveProfilePost'])) {
			saveAdminProfile();
		}
	if (isset($_POST['changePassPost'])) {
			changePassword();
		}
	

function addStudent(){
	
	$conn = myConnect();
	$id = $_POST['student_ID']; //no value
	$lastname = $_POST['student_LN'];
	$firstname = $_POST['student_FN'];
	$coursecode = $_POST['course_code'];
	$yearcode = $_POST['year_code'];
	$email	= $_POST['student_Email'];
	$contact = $_POST['student_Contact'];
	$password = $_POST['student_Password'];
	$salt ="sAlTyTeXt";

	$sql = "INSERT INTO data_student(student_ID, student_FN, student_LN, course_code, year_code,  student_Email, student_Contact, student_Password)
			VALUES ('$id','$firstname','$lastname', '$coursecode', '$yearcode', '$email','$contact', SHA2(CONCAT('$password','$salt'),512))";

	$result = mysqli_query($conn,$sql);
	if($result){
	$str = "Student is registered!";
		header("Location:../admin/student.php?studenter=$str");
	}else{
	$str = "$id is already registered";
		header("Location:../admin/student.php?studenterr=$str");
	}
}

function addEmployee(){
	
	$conn = myConnect();
	$id = $_POST['emp_ID']; //no value
	$lastname = $_POST['emp_LN'];
	$firstname = $_POST['emp_FN'];
	$email	= $_POST['emp_Email'];
	$contact = $_POST['emp_Contact'];
	$privilege = $_POST['emp_Privilege'];
	$password = $_POST['emp_Password'];
	$salt ="sAlTyTeXt";
	
	$sql = "INSERT INTO data_employee(emp_ID, emp_FN, emp_LN, emp_Email, emp_Contact, emp_Privilege, emp_Password)
			VALUES ('$id','$firstname','$lastname', '$email','$contact','$privilege', SHA2(CONCAT('$password', '$salt'),512))";

	$result = mysqli_query($conn,$sql);
	if($result){
	$str = "Employee is registered!";
		header("Location:../admin/employee.php?employee1=$str");
	}else{
	$str = "$id is already registered";
		header("Location:../admin/employee.php?employee2=$str");
	}
}

function loadStudent(){
			$conn = myConnect();
			$sql = "SELECT * FROM data_student ORDER BY data_student.student_ID DESC ";
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
function loadEmp(){
			$conn = myConnect();
			$sql = "SELECT * FROM data_employee";
			$result = mysqli_query($conn,$sql);

			while($row=mysqli_fetch_array($result)){	
				//do something as long as there's a remaining row.
				$rows[] = $row;

			}
			return $result;

}
function removeStudent($id){

	$conn = myConnect(); //no value
	$query = "DELETE FROM data_student WHERE student_ID = '$id'";
	$result = mysqli_query($conn, $query);
	$str = "student was removed!";

	if($result){
	header("Location:../admin/student.php?student=$str");
	}else{
		echo mysqli_error($conn);
	}	
}
function removeEmployee($id){

	$conn = myConnect(); //no value
	$query = "DELETE FROM data_employee WHERE emp_ID = '$id'";
	$result = mysqli_query($conn, $query);
	$str = "employee was removed!";

	if($result){
	header("Location:../admin/employee.php?employee3=$str");
	}else{
		echo mysqli_error($conn);
	}	
}
		
function retrieveStud($student_ID){

	$conn = myConnect();
	$id = $sched_ID;

    $sql = "SELECT * FROM data_student WHERE student_ID='$id'";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($result);
	return $row;
}
 function saveAdminProfile(){
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
		
	header("Location:../admin/profile.php?update-profileAdmin=$str");
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
		if(mysqli_num_rows($result) != 1){
		$str="incorrect current password!";
		header("location:../admin/profile.php?wrong-profileAdmin=$str");
		}
		else if (mysqli_num_rows($result) == 1){			
		if ($newloginpassword != $confirmpassword){
		$str1="password does not match!";
		header("Location:../admin/profile.php?wrong-profileAdmin=$str1");
		}
		else
		(mysqli_query($conn, $query2 = "UPDATE data_employee 
									  SET emp_Password = SHA2(CONCAT('$newloginpassword','$salt'),512) 
									  WHERE emp_ID = '$loginID'")); 
		$str ="profile updated!";
		$result2 = mysqli_query($conn, $query2);
		
		if($result2)
		header("Location:../admin/profile.php?update-profileAdmin=$str");
	}

}
?>