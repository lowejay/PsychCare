<?php require_once('session_controller.php');?>
<?php require_once('db_connect.php');?>

<?php
		if(isset($_POST['dreamPost'])){  
			addDream();
		}
		if(isset($_POST['learnerPost'])){
			addLearner();
		}
		if(isset($_POST['personalityPost'])){
			addPersonality();
		}
		if(isset($_POST['disorderPost'])){
			addDisorder();
		}

function addDream() {
	$conn = myConnect();
	$name = $_POST['name'];
	$meaning = $_POST['meaning'];

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
	$question = $_POST['learner_question'];
	$answer = array($_POST['answer1'], $_POST['answer2'] , $_POST['answer3']);

	$sql = "INSERT INTO survey_learner(learner_question, learner_answer) VALUES ('$question', '".implode(",", $answer)."')";
	$result = mysqli_query($conn,$sql);
		if($result){
			header("Location:../guidance/dashboard.php");
		}else{
			echo "Unexpected Error! ".mysqli_error();
		}
}

function addPersonality() {
	$conn = myConnect();
	$question = $_POST['personality_question'];
	
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
	$question = $_POST['disorder_question'];
	
	$sql = "INSERT INTO survey_disorder(disorder_question) VALUES ('$question')";
	$result = mysqli_query($conn,$sql);
		if($result){
			header("Location:../guidance/dashboard.php");
		}else{
			echo "Unexpected Error! ".mysqli_error();
		}
}

