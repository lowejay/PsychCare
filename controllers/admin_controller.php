<?php require_once('session_controller.php');?>
<?php require_once('db_connect.php');?>

<?php

	if(isset($_POST['btnConfirmStudent'])){  
			addStudent();
		}
	if(isset($_POST['btnConfirmEmployee'])){  
			addEmployee();
		}	
	if(isset($_GET['student_ID'])){
			$id = $_GET['student_ID']; 
			deleteStudent($id);
		}
	if(isset($_GET['emp_ID'])){
			$id = $_GET['emp_ID']; 
			deleteEmployee($id);
		}
	if(isset($_GET['this-employee'])){  
			removeEmployee($_GET['this-employee']);
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
		header("Location:../admin/student.php");
	}else{
	$str = "Student ID: $id is &nbsp already registered";
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
		header("Location:../admin/employee.php");
	}else{
		echo "Unexpected Error! ".mysqli_error($conn);
	}
}

function loadStudent(){
			$conn = myConnect();
			$sql = "SELECT * FROM data_student";
			$result = mysqli_query($conn,$sql);

			while($row=mysqli_fetch_array($result)){	
				//do something as long as there's a remaining row.
				$rows[] = $row;

			}
			return $result;
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
function deleteStudent($id){
	$conn = myConnect();
	$query = "DELETE FROM data_student WHERE student_ID = '$id'";
	$result = mysqli_query($conn, $query);
	if($result){
		echo "<script type='text/javascript'> alert(' has successfully deleted!'); window.location = '../admin/student.php' </script>";
	}else{
		echo "Unexpected Error! ".mysql_error();
	}
}
function removeEmployee($id){
	$conn = myConnect();
	$query = "DELETE FROM data_employee WHERE emp_ID = '$id'";
	$result = mysqli_query($conn, $query);
	if($result){
		header("Location:../admin/employee.php?msg");
	}else{
		echo "Unexpected Error! ".mysqli_error();
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