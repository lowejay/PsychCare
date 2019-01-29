<?php require('../controllers/session_controller.php'); 
if(!$_SESSION['student_ID']){header('Location: ../index.php');}?>
<?php require('../controllers/disorder_controller.php') ?>
<?php include('../views/header.php') ?>
<?php include('../views/category_sidebar.php') ?>
<?php require('../../views/alert.php') ?>
<?php $result = disorderList(); $counter=1?>

<body>

		<div id="colorlib-main">
			<div class="colorlib-work">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3">
							<h4 class="animate-box">Psychological Disorder Test</h4>
							<h1 class="animate-box" data-animate-effect="fadeInLeft">Questions</h1>
						</div>
					</div>
					<form action="../controllers/disorder_controller.php" method="post">
						<input type="hidden" name="student_id" value="<?php echo $_SESSION['student_ID'];?>">
						<div class="row">
							<div class="col-md-8 image-content">
								<table class="table table-striped table-hover animate-box" data-animate-effect="fadeInRight" id="disorder">
								<thead>
			                        <tr style="font-size: 20px">
				                        <th style="padding-right: 20px">&nbsp</th>
									    <th style="padding-right: 20px">Never</th>
			                        	<th style="padding-right: 20px">Rarely</th>
			                        	<th style="padding-right: 20px">Sometimes</th>
			                        	<th style="padding-right: 20px">Often</th>
			                       		<th style="padding-right: 20px">Everytime</th>
			                    	</tr>
		                    	</thead>
		                    	<tbody>
		                    		<?php while ($row = mysqli_fetch_array($result)) {?>
	                    				<tr style="font-size: 15px">
	                    					<td scope="col-md-10">
	                    						<?php echo $counter++; ?>
	                    						<?php echo $row['psych_question'] ?>
	                    					</td>
	                    					<td scope="col" align="center"><input type="radio" name="answer_<?php echo $row['psych_id']?>" id="et_<?php echo $row['psych_id']?>" value="0"></td>
	                                		<td scope="col" align="center"><input type="radio" name="answer_<?php echo $row['psych_id']?>" id="ot_<?php echo $row['psych_id']?>" value="1"></td>
	                                		<td scope="col" align="center"><input type="radio" name="answer_<?php echo $row['psych_id']?>" id="st_<?php echo $row['psych_id']?>" value="2"></td>
	                                		<td scope="col" align="center"><input type="radio" name="answer_<?php echo $row['psych_id']?>" id="rr_<?php echo $row['psych_id']?>" value="3"></td>
	                                		<td scope="col" align="center"><input type="radio" name="answer_<?php echo $row['psych_id']?>" id="nv_<?php echo $row['psych_id']?>" value="4"></td>
	                    				</tr>	
	                    			<?php } ?>
		                    	</tbody>
	                        </table>
						</div>
							<div class="col-md-4 sticky-parent">
								<div id="sticky_item">
									<div class="project-desc">
										<p><strong>PSYCHCARE</strong> is a free test that allows you to distinguish if you're experiencing such issues and through the system you can ask guidance to our reliable counselor here in the Univeristy. It is very important to reach out with the people you can trust with because this issues need attention and guidance.</p>
										<p><button type="submit" name="disorderAnswerPost" class="btn btn-primary">Submit and See Results </button>
										</p>
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
<?php
	include('../views/footer.php');
 ?>

