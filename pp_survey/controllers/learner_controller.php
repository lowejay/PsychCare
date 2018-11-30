<?php require_once('session_controller.php');?>
<?php require_once('db_connect.php');?>
<?php 

	if (isset($_POST['learnersubmit1'])) {
		$_SESSION['l1'] = learnerCalculate();
	}
	if (isset($_POST['learnersubmit2'])) {
		$_SESSION['l2'] = learnerCalculate();
	}
	if (isset($_POST['learnersubmit3'])) {
		$_SESSION['l3'] = learnerCalculate();
	}
	if(isset($_SESSION['l1'], $_SESSION['l2'], $_SESSION['l3'])){
		learnerDeter($_SESSION['l1'],$_SESSION['l2'],$_SESSION['l3']);
	}


function learnerCalculate () {
	$result = 0;
	$student_id = $_SESSION['student_ID'];
	$conn = myConnect();

	foreach($_POST as $key => $value){
	$result = $result + (int)$value;
	}
	return $result;
}

function insertResult($score){//
	$conn = myConnect();
	$student_id = $_SESSION['student_ID'];
	$sql = "INSERT INTO data_history(student_ID, score_learner, history_date) VALUES ('$student_id', '$score', NOW())";
	$result = mysqli_query($conn,$sql);
	if($result){
		header("Location:../a.personality/result.php?score=$score");
	}else{
		echo "Unexpected Error! ".mysqli_error($conn);
	}
}

function learnerDeter ($l1,$l2,$l3){

	$r1 = $_SESSION['l1'];
	$r2 = $_SESSION['l2'];
	$r3 = $_SESSION['l3'];

	if(($r1 > $r2) AND ($r1 > $r3)){
		$score = "Visual";
	}
	if(($r2 > $r1) AND ($r2 > $r3)) {
		$score = "Auditory";
	}
	if(($r3 > $r1) AND ($r3 > $r2)) {
		$score = "Kinesthetic";
	}
	if(isset($score)){
		insertResult($score);
		header("Location:../a.learner/result.php?result=$score");
	}else{
		echo "Unexpected Error! ";
	}
}

function learnerQ ($n) {
	$conn = myConnect();
	$sql = "SELECT * FROM survey_learner WHERE learner_section = $n ORDER BY RAND() LIMIT 10";
	$result = mysqli_query($conn,$sql);
	return $result;
}

function unsetln(){
	unset($_SESSION['l1']);
	unset($_SESSION['l2']);
	unset($_SESSION['l3']);
}
?>