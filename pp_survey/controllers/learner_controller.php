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

function learnerDeter ($l1,$l2,$l3){

	$r1 = $_SESSION['l1'];
	$r2 = $_SESSION['l2'];
	$r3 = $_SESSION['l3'];

	if(($r1 > $r2) AND ($r1 > $r3)){
		$mssg = "Visual";
	}
	if(($r2 > $r1) AND ($r2 > $r3)) {
		$mssg = "Auditory";
	}
	if(($r3 > $r1) AND ($r3 > $r2)) {
		$mssg = "Kinesthetic";
	}
	if(isset($mssg)){
		header("Location:../a.learner/result.php?result=$mssg");
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

function insertResult($l1,$l2,$l3){//
}

function unsetln(){
unset($_SESSION['l1']);
unset($_SESSION['l2']);
unset($_SESSION['l3']);
}
?>