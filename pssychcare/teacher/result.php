<?php require('../controllers/session_controller.php'); if(!$_SESSION['user_ID']){header('Location: ../index.php');}?>
<?php require('../views/header.php');?>
<body class="animsition">
    <div class="page-wrapper">
		<div class="page-container">
				<div class="main-content">
					<div class="section__content section__content--p30">
						<div class="container-fluid">
						<div class="row">
							
						</div>
					<div class="row m-t-25">
						<div class="col-sm-12 col-lg-12">
							<div class="overview-box clearfix">
                                <h3 class="title-2 m-b-15">Result</h3>
                                <div class="table-responsive table--no-card m-b-100">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>ID Number</th>
                                                <th>Date</th>
                                                <th>Result</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>12101582</td>
                                                <td>07/09/2018</td>
                                                <td> Lorem Ipsum... </td>
                                            </tr>
                                            
										</tbody>
										<tbody>
                                            <tr>
                                                <td>13105809</td>
                                                <td>07/13/2018</td>
                                                <td> Lorem Ipsum... </td>
                                            </tr>
                                            
										</tbody>
                                    </table>
                                </div>
                            </div>
						</div>
				
                   
<?php require('../views/footer.php');
?>