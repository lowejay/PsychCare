<?php require('../controllers/session_controller.php'); if(!$_SESSION['user_ID']){header('Location: ../index.php');}?>
<?php require('..header1.php');?>

<?php require('../views/footer.php');
?>