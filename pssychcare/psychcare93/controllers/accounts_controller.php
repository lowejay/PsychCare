<?php require_once('db_connect.php');?>
<?php require_once('../views/footer.php');?>
<?php
		if(isset($_POST['btnAddEmp'])){
			newEmp();
		}
		if(isset($_POST['btnAddStudent'])){
			newStudent();
		}
?>

<?php
function newEmp(){
	$conn = myConnect();

	$id = mysqli_real_escape_string($conn,$_POST['idnumber']);
	$fname = mysqli_real_escape_string($conn,$_POST['firstname']);
	$lname = mysqli_real_escape_string($conn,$_POST['lastname']);
	$password = $_POST['password'];
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$salt = "sAlTyTeXt";

	if ($fname == "KEN" OR $fname == "ken" OR $fname == "kEn" OR $fname == "KeN" OR $fname == "Ken" OR $fname == "kEN" OR $fname == "KEn" OR $fname == "keN") {
		$str = "First name cannot be used!";
		
		echo '<script>
		  swal({
		  title: "'.$str.'",
		  icon: "error",
		  button: "Ok",
		})
		.then(function() {
    	window.history.pushState("", "", "/psychcare/views/sign-up.php");
		});
		</script>';

	}else{

		$sql = "INSERT INTO data_employee(emp_ID, emp_FN, emp_LN, emp_Email, emp_Password) VALUES 
							('$id','$fname','$lname','$email', SHA2(CONCAT('$password','$salt'),512))";

		$result = mysqli_query($conn,$sql);
		if($result){
			header("Location:../views/acconfirm.php");
		}else{
			echo "Unexpected Error! ".mysqli_error($conn);
		}
	}
}