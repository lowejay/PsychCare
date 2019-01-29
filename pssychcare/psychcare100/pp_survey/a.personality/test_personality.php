<?php include('../views/category_sidebar.php'); ?>
<?php include('../views/header.php'); ?>
<?php require('../controllers/session_controller.php'); 
if(!$_SESSION['student_ID']){header('Location: ../index.php');}?>
<?php require('../controllers/personality_controller.php'); ?>

<?php $result = loadPersonality();?>
<body>
	<!-- BODY -->
		<div id="colorlib-main">
			<div class="colorlib-work">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3">
							<h4 class="animate-box ">Personality Test</h4>
							<h1 class="animate-box" data-animate-effect="fadeInLeft">Questions</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8 image-content">
							<table class="table table-striped table-hover animate-box" data-animate-effect="fadeInRight" id="personality">
							<thead>
		                        <tr style="font-size: 20px">
			                        <th style="padding-right: 20px">&nbsp</th>
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
	                    		<?php foreach($result as $row)
	                    					  $counter = 1; {?>
                    				<tr style="font-size: 15px">
                    					<td scope="col-md-10"><?php echo $counter ++; ?></td>
                    					<td scope="col-md-10 "><?php echo $row['personality_question'] ?></td>
                    					<td scope="col-md-10 "><?php echo $row['personality_choices'] ?></td>
                    					<td scope="col" align="center"><input type="radio" name="radio" id="1" value="1"></td>
                                		<td scope="col" align="center"><input type="radio" name="radio" id="2" value="2"></td>
                                		<td scope="col" align="center"><input type="radio" name="radio" id="3" value="3"></td>
                                		<td scope="col" align="center"><input type="radio" name="radio" id="4" value="4"></td>
                                		<td scope="col" align="center"><input type="radio" name="radio" id="5" value="5"></td>
                    				</tr>	
                    			<?php } ?>
	                    	</tbody>
                        	</table>
						</div>
						<div class="col-md-4 sticky-parent">
							<div id="sticky_item">
								<div class="project-desc">
									<p><strong>PSYCHCARE</strong> is a free test that allows you to distinguish if you're experiencing such issues and through the system you can ask guidance to our reliable counselor here in the Univeristy. It is very important to reach out with the people you can trust with because this issues need attention and guidance.</p>
									<p><a href="#" class="btn btn-primary">Submit and See Results</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--END BODY-->
	</body>
</html>
<?php require('../views/footer.php') ?>

