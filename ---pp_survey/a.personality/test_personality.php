<?php require('../controllers/session_controller.php'); 
if(!$_SESSION['student_ID']){header('Location: ../index.php');}?>
<?php require('../controllers/personality_controller.php') ?>
<?php include('../views/header.php') ?>
<?php include('../views/category_sidebar.php') ?>

<?php $result = loadPersonality(); $counter=1?>

<body>

		<div id="colorlib-main">
			<div class="colorlib-work">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3">
							<h4 class="animate-box">Personality Test</h4>
							<h1 class="animate-box" data-animate-effect="fadeInLeft">Questions</h1>
						</div>
					</div>
					<form action="../controllers/personality_controller.php" method="post">
						<input type="hidden" name="student_id" value="<?php echo $_SESSION['student_ID'];?>">
						<div class="row">
							<div class="col-md-8 image-content">
								<table class="table table-striped table-hover animate-box" data-animate-effect="fadeInRight" id="personality">
								<thead>
			                        <tr style="font-size: 20px">
				                        <th>&nbsp</th>
									    <th>AGREE!!</th>
			                        	<th>Agree</th>
			                        	<th>neutral</th>
			                        	<th>Disagree</th>
			                       		<th>DISAGREE!!</th>
			                    	</tr>
		                    	</thead>
		                    	<tbody>
		                    		<?php while ($row = mysqli_fetch_array($result)) {?>
	                    				<tr style="font-size: 15px">
	                    					<td scope="col">
	                    						<?php echo $counter++; ?>
	                    						<?php echo $row['personality_question'] ?>
	                    					</td>
	                    					<td scope="col" align="center"><input type="radio" name="answer_<?php echo $row['personality_id']?>" id="et_<?php echo $row['personality_id']?>" value="2"></td>
	                                		<td scope="col" align="center"><input type="radio" name="answer_<?php echo $row['personality_id']?>" id="ot_<?php echo $row['personality_id']?>" value="1"></td>
	                                		<td scope="col"align="center"><input type="radio" name="answer_<?php echo $row['personality_id']?>" id="st_<?php echo $row['personality_id']?>" value="0"></td>
	                                		<td scope="col" align="center"><input type="radio" name="answer_<?php echo $row['personality_id']?>" id="rr_<?php echo $row['personality_id']?>" value="-1"></td>
	                                		<td scope="col" align="center"><input type="radio" name="answer_<?php echo $row['personality_id']?>" id="nv_<?php echo $row['personality_id']?>" value="-2"></td>
	                    				</tr>	
	                    			<?php } ?>
		                    	</tbody>
	                        </table>
						</div>
							<div class="col-md-4 sticky-parent">
								<div id="sticky_item">
									<div class="project-desc">
										<p><strong>PSYCHCARE</strong> is a free test that allows you to distinguish if you're experiencing such issues and through the system you can ask guidance to our reliable counselor here in the Univeristy. It is very important to reach out with the people you can trust with because this issues need attention and guidance.</p>
										<p><button type="submit" name="personalityAnswerPost" class="btn btn-primary">Submit and See Results</button></p>
									</div>
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

