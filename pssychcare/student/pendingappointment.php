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
							<h2 class="title-1"> Pending Appointment </h2>
								</div>
							</div>
						</div>
					<div class="row m-t-25">
						<div class="col-sm-6 col-lg-6">
							<div class="overview-box clearfix">
                                <h3 class="title-2 m-b-20">Vacant Schedules</h3>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>ID Number</th>
                                                <th>Date</th>
                                                <th>Result</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
						</div>
					
						<div class="col-sm-6 col-lg-6">
							<div class="overview-box clearfix">
                                <h3 class="title-2 m-b-20">Booked Schedules</h3>
                                <div class="table-responsive table--no-card m-b-40">
                                	<table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>ID Number</th>
                                                <th>Date</th>
                                                <th>Result</th>
                                            </tr>
                                        </thead>
                                    </table>
								</div>
							</div>
						</div>						
					</div>
					<hr>

<?php require('../views/footer.php');?>