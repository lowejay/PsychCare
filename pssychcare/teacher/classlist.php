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
							<h2 class="title-1">Class List</h2>
								</div>
							</div>
						</div>
						<hr>
<section class="blog section">
    <div class="container">
        <div class="row">
          
                <div class="sidebar">
                    <!-- Category Widget -->
                        <button type="button" class="btn btn-info" style="margin-bottom: 5%" data-toggle="modal" data-target="#customer_modal"><i class="fa fa-user"></i> Add New Schedule
                        </button>
                    </div>
                </div>
            </div>

					<div class="row m-t-25">
						<div class="col-sm-12 col-lg-12">
                            <center><h5 class="widget-header"><i class="fa fa-users"></i> MWF</h5></center><br>
							<div class="overview-box clearfix">
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning table-hover">
                                        <thead>
                                            <tr>
                                                <th>Course</th>
                                                <th>Subject</th>
                                                <th>Schedule</th>
                                                <th>Time</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                                <th>View</th>
                                            </tr>
                                        </thead>
										<tbody>
                                            <tr>
                                                <td>ICT</td>
                                                <td>ICT 110</td>
                                                <td>MWF</td>
                                                <td>09:30am - 10:30am</td>
                                               
                                                <td><a href="edit.php" class="btn btn-info btn-sm"><i class='fa fa-edit'></i> Edit </a></td>
                                                <td><a href="delete.php" class="btn btn-danger btn-sm"><i class='fa fa-trash'></i> Delete </a></td>
                                                <td><a href="view.php" class="btn btn-success btn-sm"><i class='fa fa-eye'></i> View </a></td>    
                                            </tr>
										</tbody> 
                                        <tbody>
                                            <tr>
                                                <td>ICT</td>
                                                <td>ICT 116</td>
                                                <td>MWF</td>
                                                <td>11:30am - 1:00pm</td>
                                               
                                                <td><a href="edit.php" class="btn btn-info btn-sm"><i class='fa fa-edit'></i> Edit </a></td>
                                                <td><a href="delete.php" class="btn btn-danger btn-sm"><i class='fa fa-trash'></i> Delete </a></td>
                                                <td><a href="view.php" class="btn btn-success btn-sm"><i class='fa fa-eye'></i> View </a></td>    
                                            </tr>
                                        </tbody> 
                                    </table>
                                </div>
                            </div>
						</div>
                    </div>

                    <div class="row m-t-30">
                        <div class="col-sm-12 col-lg-12">
                            <center><h5 class="widget-header"><i class="fa fa-users"></i> TTH</h5></center><br>
                            <div class="overview-box clearfix">
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning table-hover">
                                        <thead>
                                            <tr>
                                                <th>Course</th>
                                                <th>Subject</th>
                                                <th>Schedule</th>
                                                <th>Time</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                                <th>View</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>ICT</td>
                                                <td>ICT 110</td>
                                                <td>TTH</td>
                                                <td>09:30am - 10:30am</td>
                                               
                                                <td><a href="edit.php" class="btn btn-info btn-sm"><i class='fa fa-edit'></i> Edit </a></td>
                                                <td><a href="delete.php" class="btn btn-danger btn-sm"><i class='fa fa-trash'></i> Delete </a></td>
                                                <td><a href="view.php" class="btn btn-success btn-sm"><i class='fa fa-eye'></i> View </a></td>     
                                            </tr>
                                        </tbody> 
                                        <tbody>
                                            <tr>
                                                <td>ICT</td>
                                                <td>ICT 116</td>
                                                <td>TTH</td>
                                                <td>11:30am - 1:00pm</td>
                                               
                                               <td><a href="edit.php" class="btn btn-info btn-sm"><i class='fa fa-edit'></i> Edit </a></td>
                                                <td><a href="delete.php" class="btn btn-danger btn-sm"><i class='fa fa-trash'></i> Delete </a></td>
                                                <td><a href="view.php" class="btn btn-success btn-sm"><i class='fa fa-eye'></i> View </a></td>     
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>  
	                       <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 PsychCare. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<?php require('../views/footer.php');
?>