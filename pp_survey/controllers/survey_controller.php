<?php require('database_connection.php');?>
<?php 

if (isset($_POST['disorderAnswerPost'])) {
	disorderAnswers();
}

function dreamList () {
	$conn = myConnect();

	if (isset($_GET['letter'])) {
		$letter = $_GET['letter'];
		$sql = "SELECT * FROM survey_dream WHERE dream_name LIKE '".$letter."%'";
		$result = mysqli_query($conn,$sql);
		return $result;
	}

	$sql = "SELECT * FROM survey_dream";
	$result = mysqli_query($conn,$sql);
	return $result;
}

function disorderList () {
	$conn = myConnect();
	$sql = "SELECT * FROM survey_disorder";
	$result = mysqli_query($conn,$sql);
	return $result;
}

function learnerList () {

}

function personality () {

}

function disorderAnswers () {
	$result = 0;
	$student_id = $_POST['student_id'];
	$conn = myConnect();

	unset($_POST['disorderAnswerPost']);
	unset($_POST['student_id']);

	foreach($_POST as $key => $value)	{
    $result = $result + (int)$value;
	}

	$check  = "SELECT * FROM data_history WHERE student_ID = '$student_id'";
	$checkResult = mysqli_query($conn, $check);

	if (mysqli_num_rows($checkResult)) {
				$sql = "UPDATE data_history SET total_disorder = '$result' WHERE student_ID = '$student_id'";
				$result = mysqli_query($conn,$sql);
				if($result){
					echo "success!";
				}else{
					echo "Unexpected Error! ".mysqli_error($conn);
				}
		return;
	}

	$sql = "INSERT INTO data_history(student_ID, total_disorder) VALUES ('$student_id', '$result')";
	$result = mysqli_query($conn,$sql);
	if($result){
		echo "success!";
	}else{
		echo "Unexpected Error! ".mysqli_error($conn);
	}
}


 ?>