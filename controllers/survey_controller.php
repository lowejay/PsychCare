<?php require_once('session_controller.php');?>
<?php require_once('db_connect.php');?>

<?php
		if(isset($_POST['dream-submit'])){  
			addDream();
		}
		if(isset($_POST['learner-submit'])){
			addLearner();
		}
		if(isset($_POST['personality-submit'])){
			addPersonality();
		}
		if(isset($_POST['disorder-submit'])){
			addDisorder();
		}

function addDream() {
	$conn = myConnect();
	$name = $_POST['dream-name'];
	$meaning = $_POST['dream-meaning'];

	$sql = "INSERT INTO survey_dream(dream_name, dream_meaning) VALUES ('$name', '$meaning')";
	$result = mysqli_query($conn,$sql);
		if($result){

			echo "<script>alert(Dream has been added!)</script>";
			header("Location:../guidance/dashboard.php");
		}else{
			echo "Unexpected Error! ".mysqli_error();
		}
}

function addLearner() {
	$conn = myConnect();
	$question = $_POST['learner-question'];
	$section = $_POST['learner-section'];

	$sql = "INSERT INTO survey_learner(learner_question, learner_section) VALUES ('$question', '$section')";
	$result = mysqli_query($conn,$sql);
		if($result){
			$str = "Question added!";
			header("Location:../guidance/dashboard.php?addLearner=$str");
		}else{
			echo "Unexpected Error! ".mysqli_error();
		}
}

function addPersonality() {
	$conn = myConnect();
	$question = $_POST['personality-question'];
	
	$sql = "INSERT INTO survey_personality(personality_question) VALUES ('$question')";
	$result = mysqli_query($conn,$sql);
		if($result){
			header("Location:../guidance/dashboard.php");
		}else{
			echo "Unexpected Error! ".mysqli_error();
		}
}

function addDisorder() {
	$conn = myConnect();
	$question = $_POST['disorder-question'];
	
	$sql = "INSERT INTO survey_disorder(disorder_question) VALUES ('$question')";
	$result = mysqli_query($conn,$sql);
		if($result){
			header("Location:../guidance/dashboard.php");
		}else{
			echo "Unexpected Error! ".mysqli_error();
		}
}

