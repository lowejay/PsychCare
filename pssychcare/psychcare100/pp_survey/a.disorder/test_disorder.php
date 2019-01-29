<?php require('../controllers/session_controller.php'); 
if(!$_SESSION['student_ID']){header('Location: ../index.php');}?>
<?php require('../controllers/disorder_controller.php') ?>
<?php include('../views/header.php') ?>
<?php include('../views/category_sidebar.php') ?>

<?php $result = loadDisorder(); 
	$counter = 1; ?>
<body>

	<!-- BODY -->
		<div id="colorlib-main">
			<div class="colorlib-work">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3">
							<h4 class="animate-box">Psychological Disorder Test</h4>
							<h1 class="animate-box" data-animate-effect="fadeInLeft">Questions</h1>
						</div>
					</div>
					<form name="resultForm" method="POST" action="../controllers/disorder_controller.php">
					<div class="row">
						<div class="col-md-8 image-content">
							<table class="table table-striped table-hover animate-box" data-animate-effect="fadeInRight" id="disorder">
							<thead>
		                        <tr style="font-size: 20px">
			                        <th style="padding-right: 20px">&nbsp</th>
								    <th style="padding-right: 20px">&nbsp</th>
								    <th style="padding-right: 20px">Everytime</th>
		                        	<th style="padding-right: 20px">Often</th>
		                        	<th style="padding-right: 20px">Sometimes</th>
		                        	<th style="padding-right: 20px">Rarely</th>
		                       		<th style="padding-right: 20px">Never</th>
		                    	</tr>
	                    	</thead>
	                    	<tbody>
	                    		<?php foreach ($result as $row){ ?>
                    				<tr style="font-size: 15px">
                    					<td scope="col-md-10"><?php echo $counter ++; ?></td>
                    					<td scope="col-md-10 "><?php echo $row['disorder_question']; ?></td>
                
                    					<td scope="col" align="center"><input type="radio" name="Everytime" id="1" value="1"></td>
                                		<td scope="col" align="center"><input type="radio" name="Often" id="2" value="2"></td>
                                		<td scope="col" align="center"><input type="radio" name="Sometimes" id="3" value="3"></td>
                                		<td scope="col" align="center"><input type="radio" name="Rarely" id="4" value="4"></td>
                                		<td scope="col" align="center"><input type="radio" name="Never" id="5" value="5"></td>
                    				</tr>	
                    			<?php } ?>
	                    	</tbody>
                        </table>
						</div>
							<div class="col-md-4 sticky-parent">
								<div id="sticky_item">
									<div class="project-desc">
									<p><strong>PSYCHCARE</strong> is a free test that allows you to distinguish if you're experiencing such issues and through the system you can ask guidance to our reliable counselor here in the Univeristy. It is very important to reach out with the people you can trust with because this issues need attention and guidance.</p>
									<input type="submit" name="btnResultSubmit" class="btn btn-main" value="Submit and see results">
								</div>
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!--END BODY-->

	</body>
</html>
<?php include('../views/footer.php') ?>

