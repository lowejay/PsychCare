<?php require_once('session_controller.php');?>
<?php require_once('db_connect.php');?>
<?php 
	if (isset($_POST['disorderAnswerPost'])) {
	disorderAnswers();
}



function disorderAnswers () {
	$result = 0;
	$student_id = $_POST['student_id'];
	$conn = myConnect();
	
	unset($_POST['disorderAnswerPost']);
	unset($_POST['student_id']);

	foreach($_POST as $key => $value)	{
    $score = $score + (int)$value;
	}
	$sql = "INSERT INTO data_history(student_ID, score_psychological, history_date) VALUES ('$student_id', '$score', NOW())";
	$result = mysqli_query($conn,$sql);
	if($result){
		$str = "You have minimal depression";
		header("Location:../a.disorder/result.php?score=$score");
	}else{
		echo "Unexpected Error! ".mysqli_error($conn);
	}
}
function disorderList () {
	$conn = myConnect();
	$sql = "SELECT * FROM survey_psychological";
	$result = mysqli_query($conn,$sql);
	return $result;
}

 ?>