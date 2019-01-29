<?php require('../controllers/session_controller.php'); if(!$_SESSION['user_ID']){header('Location: ../index.php');}?>
<?php require('../views/header.php');?>
<body class="animsition">
    <div class="page-wrapper">
		<div class="page-container">
				<div class="main-content">
					<div class="section__content section__content--p30">
						<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="overview-wrap">
							<h2 class="title-1"> History </h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>		


<?php require('../views/footer.php');?>