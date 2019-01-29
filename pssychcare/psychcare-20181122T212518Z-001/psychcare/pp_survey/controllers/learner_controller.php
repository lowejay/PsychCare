<?php require_once('session_controller.php');?>
<?php require_once('db_connect.php');?>
<?php 

	if (isset($_POST['learnerAnswerPost'])) {
	learnerAnswers();
}



function learnerAnswers () {
	$result = 0;
	$student_id = $_POST['student_id'];
	$conn = myConnect();

	unset($_POST['learnerAnswerPost']);
	unset($_POST['student_id']);

	foreach($_POST as $key => $value)	{
    $result = $result + (int)$value;
	}
	$sql = "INSERT INTO data_history(student_ID, total_learner) VALUES ('$student_id', '$result')";
	$result = mysqli_query($conn,$sql);
	if($result){
		echo "success!";
	}else{
		echo "Unexpected Error! ".mysqli_error($conn);
	}
}
function learnerList () {
	$conn = myConnect();
	$sql = "SELECT * FROM survey_learner";
	$result = mysqli_query($conn,$sql);
	return $result;
}

 ?>