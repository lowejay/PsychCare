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
								<br><br>
								<div class="overview-wrap">
							<h2 class="title-1"> Appointment Schedules</h2>
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
                                                <th>Counselor</th>
                                                <th>Vacancy Schedule</th>
                                                <th>Result</th>
                                                <th>ID Number</th>
                                                <th>Date</th>
                                                <th>Result</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
										//	foreach($schedule as $rows){
										//		echo "<tr>";
										//		echo "<td style='text-align:center;'>".$rows['user_FN']." ".$rows['user_LN']." </td>";
										//		echo "<td style='text-align:center;'>".$rows['orderTotalQuantity']." </td>";
										//		echo "<td style='text-align:center;'>".$rows['orderTotalPrice']." </td>";
										//		echo "<td style='text-align:center;'>".$rows['orderValues']." </td>";
										//	}?>
										</tbody>
                                    </table>
                                </div>
                            </div>
						</div>
					
						<div class="col-sm-6 col-lg-6">
							<div class="overview-box clearfix">
                                <h3 class="title-2 m-b-20">Occupied Schedules</h3>
                                <div class="table-responsive table--no-card m-b-40">
                                	<table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>ID Number</th>
                                                <th>Date</th>
                                                <th>Result</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
										//	foreach($schedule as $rows){
										//		echo "<tr>";
										//		echo "<td style='text-align:center;'>".$rows['user_FN']." ".$rows['user_LN']." </td>";
										//		echo "<td style='text-align:center;'>".$rows['orderTotalQuantity']." </td>";
										//		echo "<td style='text-align:center;'>".$rows['orderTotalPrice']." </td>";
										//		echo "<td style='text-align:center;'>".$rows['orderValues']." </td>";
										//	}?>
										</tbody>
                                    </table>
								</div>
							</div>
						</div>						
					</div>
					<hr>
		<div class="row">
			<div class="col-lg-12">
								<div class="overview-wrap">
							<h1 class="title-1"> Add Schedule</h1>
								</div>
						<form method="POST" action="../controllers/guidance_controller.php">
							<div class="row">
								<div class="col-sm-12 col-md-6">
									<div class="form-group mb-30">
									    <label>Date</label>
										<input type="date" class="form-control" name="date-of-sched" min="<?php echo date('Y-m-d'); ?>" required>
									</div>
								</div>
								<div class="col-sm-12 col-md-3">
									<div class="form-group mb-30">
									    <label>Time from</label>
										<input type="time" class="form-control" name="time-from" required>
									</div>
								</div>
								<div class="col-sm-12 col-md-3">
									<div class="form-group mb-30">
									    <label>Until </label>
										<input type="time" class="form-control" name="time-until" required>
									</div>
								</div>
									<div class="col-sm-12 col-md-6">
										<div class="form-group mb-30">
										    <label>Counselor's First Name</label>
											<input type="text" class="form-control" name="fname" value="<?php echo $_SESSION['user_FN'];?>" required autocomplete="on">
										</div>
									</div>
									<div class="col-sm-12 col-md-6">
										<div class="form-group mb-30">
										    <label>Last Name</label>
											<input type="text" class="form-control" name="lname" value="<?php echo $_SESSION['user_LN'];?>" required autocomplete="on">
										</div>
									</div>
									<div class="col-sm-12 col-md-3">
										<div class="form-group mb-30">
										    <label>Contact Number</label>
											<input type="text" class="form-control" name="contact_no" value="<?php echo $_SESSION['user_Phone'];?>" required>
										</div>
									</div>
								</div>
							<div class="col-sm-12 col-md-5">
								<div class="form-group mb-30">
									    <input type="submit" name="btnConfirmSched" class="btn btn-success col-md-6" value="Submit">
								</div>
							</div>
						</form>
					</div>
				</div>
				</div>
			</div>
		</div>
		</div>
	</div>
<?php require('../views/footer.php');?>