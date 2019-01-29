<!-- FOR SWEET ALERT JS ONLY -->
<script src="../vendor/sweetalert/sweetalert.min.js"></script>
<?php 

if (isset($_GET['appointment'])){
	$mssg = $_GET['appointment'];
echo '<script>
		  swal({
		  title: "'.$mssg.'",
		  icon: "success",
		  button: "Ok",
		})
		.then(function() {
    	window.history.pushState("", "", "/psychcare/guidance/dashboard.php");
});
</script>';
}

if (isset($_GET['removedSched'])){
	$mssg = $_GET['removedSched'];
echo '<script>
		  swal({
		  title: "'.$mssg.'",
		  icon: "success",
		  button: "Ok",
		})
		.then(function() {
    	window.history.pushState("", "", "/psychcare/teacher/classlist.php");
});
</script>';
}

if (isset($_GET['updatedSched'])){
	$mssg = $_GET['updatedSched'];
echo '<script>
		  swal({
		  title: "'.$mssg.'",
		  icon: "success",
		  button: "Ok",
		})
		.then(function() {
    	window.history.pushState("", "", "/psychcare/teacher/classlist.php");
});
</script>';
}

if (isset($_GET['errorSched'])){
	$mssg = $_GET['errorSched'];
echo '<script>
		  var $str = "End time must be greater than time start!";
          swal($str,{
              button: "Ok",
         })
		.then(function() {
    	window.history.pushState("", "", "/psychcare/guidance/dashboard.php");
});
</script>';
}

if (isset($_GET['addSched'])){
	$mssg = $_GET['addSched'];
echo '<script>
		  swal({
		  title: "'.$mssg.'",
		  icon: "success",
		  button: "Ok",
		})
		.then(function() {
    	window.history.pushState("", "", "/psychcare/guidance/dashboard.php");
});
</script>';
}

if (isset($_GET['studenterr'])){
	$mssg = $_GET['studenterr'];
echo '<script>
		  swal({
		  title: "'.$mssg.'",
		  text: "If you think this is an error, please write down your ID number, full name and e-mail and kindly give it to the secretary.",
		  icon: "error",
		  button: "Ok",
		})
		.then(function() {
    	window.history.pushState("", "", "/psychcare/admin/student.php");
});
</script>';
}

if (isset($_GET['addedSched'])){
	$mssg = $_GET['addedSched'];
echo '<script>
		  swal({
		  title: "'.$mssg.'",
		  icon: "success",
		  button: "Ok",
		})
		.then(function() {
    	window.history.pushState("", "", "/psychcare/teacher/classlist.php");
});
</script>';
}

if (isset($_GET['existSched'])){
	$mssg = $_GET['existSched'];
echo '<script>
		  swal({
		  title: "'.$mssg.'",
		  text: "Schedule is in conflict or already exist!",
		  icon: "error",
		  button: "Ok",
		})
		.then(function() {
    	window.history.pushState("", "", "/psychcare/teacher/classlist.php");
});
</script>';
}
?>