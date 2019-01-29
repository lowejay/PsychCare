<?php require_once('session_controller.php');?>
<?php require_once('db_connect.php');?>
<?php 
	if (isset($_POST['psychologicalAnswerPost'])) {
	psychologicalAnswers();
}



function psychologicalAnswers () {
	$result = 0;
	$student_id = $_POST['student_id'];
	$conn = myConnect();

	unset($_POST['psychologicalAnswerPost']);
	unset($_POST['student_id']);

	foreach($_POST as $key => $value)	{
    $score = $score + (int)$value;
	}
	$sql = "INSERT INTO data_history(student_ID, score_psychological) VALUES ('$student_id', '$score')";
	$result = mysqli_query($conn,$sql);
	if($result){
		header("Location:../a.disorder/result.php?score=$score");
	}else{
		echo "Unexpected Error! ".mysqli_error($conn);
	}
}
function psychologicalList () {
	$conn = myConnect();
	$sql = "SELECT * FROM survey_psychological";
	$result = mysqli_query($conn,$sql);
	return $result;
}

 ?>