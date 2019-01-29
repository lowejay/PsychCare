<?php require('../controllers/session_controller.php'); 
if(!$_SESSION['student_ID']){header('Location: ../index.php');}?>
<?php require('../controllers/personality_controller.php') ?>
<?php require('../views/header.php') ?>
<?php require('../views/category_sidebar.php') ?>

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
						<div class="col-md-10 image-content">
							<table class="table table-striped table-hover animate-box" data-animate-effect="fadeInRight" id="personality">
	                    	<tbody>
	                    		<?php while ($row = mysqli_fetch_array($result)) {?>
                				<tr style="font-size: 15px">
                					<td scope="col">
                						<b><?php echo $counter++ .'.';?>
                						<?php echo $row['personality_question'];?>
                						</b>
                					</td>
                				</tr>
                				<tr>
                					<td style="padding-bottom: 30px;" align="center">
                						<label class="radio-inline">
                							<input type="radio" name="answer_<?php echo $row['personality_id']?>" id="sa_<?php echo $row['personality_id']?>" value="4"> Strongly Agree
                						</label>
                						<label class="radio-inline">
                    						<input type="radio" name="answer_<?php echo $row['personality_id']?>" id="aa_<?php echo $row['personality_id']?>" value="3"> Agree
                						</label>
                						<label class="radio-inline">
                							<input type="radio" name="answer_<?php echo $row['personality_id']?>" id="nn_<?php echo $row['personality_id']?>" value="2"> Neutral
                						</label>
                						<label class="radio-inline">
                							<input type="radio" name="answer_<?php echo $row['personality_id']?>" id="dd_<?php echo $row['personality_id']?>" value="1"> Disagree
                						</label>
                						<label class="radio-inline">
                							<input type="radio" name="answer_<?php echo $row['personality_id']?>" id="sd_<?php echo $row['personality_id']?>" value="0"> Strongly Disagree
                						</label>
                					</td>
                				</tr>	
                    			<?php } ?>
	                    	</tbody>
                        </table>
					</div>
						<div class="col-md-4 sticky-parent">
							<div id="sticky_item">
								<div class="project-desc">
									<p><button type="submit" name="personalityAnswerPost" class="btn btn-primary">Submit and See Results</button></p>
								</div>
							</div>
						</div>
				</form>
				</div>
			</div>
		</div>
	</div>
</body>
<?php require('../views/footer.php'); ?>