<script src="../vendor/sweetalert/sweetalert.min.js"></script>
<?php 
if (isset($_GET['x'])){
echo '<script>
		swal({
		text: "Please try again.",
		title: "Incorrect login credentials!",
		icon: "error",
		button: "Ok",
		})
		.then(function() {
    	window.history.pushState("", "", "/psychcare/pp_survey/views/mainpage.php");
});
</script>';
}

?>