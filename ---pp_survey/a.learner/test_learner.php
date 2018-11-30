<?php require('../controllers/session_controller.php');if(!$_SESSION['student_ID']){header('Location: ../index.php');}
require('../controllers/learner_controller.php');unsetln();
require('../views/header.php');require('../views/category_sidebar.php');
$s1 = learnerQ(1); 
$s2 = learnerQ(2);
$s3 = learnerQ(3);
$counter=1;?>
<body>
	<div id="colorlib-main">
		<div class="colorlib-work">
			<div class="container-fluid">
				<div id="ln1">
					<form class="f1" action="../controllers/learner_controller.php" method="post">
						<div class="row">
							<div class="col-md-6">
								<h4 class="animate-box">Types of Learner Test</h4>
								<h1 class="animate-box" data-animate-effect="fadeInLeft">Section 1</h1>
							</div>
						</div>
						<div class="row">
							<div class="col-md-10 image-content">
								<table class="table table-striped table-hover animate-box" data-animate-effect="fadeInRight" id="learnert1">
		                    	<tbody>
		                    		<?php while ($row = mysqli_fetch_array($s1)) {?>
	                    				<tr style="font-size: 15px;">
	                    					<td>
	                    						<b><?php echo $counter++ .'.'; ?>
	                    						<?php echo $row['learner_question'] ?>
	                    						</b>
	                    					</td>
	                    				</tr>
	                    				<tr>
	                    					<td style="padding-bottom: 30px;">
	                    						<label class="radio-inline">
	                    							<input type="radio" name="l1_<?php echo $row['learner_id']?>" id="idnv_<?php echo $row['learner_id']?>" value="1" required> Never applies to me</label>
	                                			<label class="radio-inline">
	                                				<input type="radio" name="l1_<?php echo $row['learner_id']?>" id="idso_<?php echo $row['learner_id']?>" value="2" required> Sometimes applies to me</label>
	                                			<label class="radio-inline">
	                                				<input type="radio" name="l1_<?php echo $row['learner_id']?>" id="idof_<?php echo $row['learner_id']?>" value="3" required> Often applies to me</label>
	                                		</td>
	                    				</tr>
	                    			<?php } ?>
		                    	</tbody>
	                        	</table>
							</div>
							<div class="col-md-5">
								<div id="sticky_item">
									<div class="project-desc">
										<input type="submit" name="learnersubmit1" id="learners1" class="learners btn btn-primary" value="Continue">
										<p id="message"></p>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div id="ln2">
					<form class="f2" action="../controllers/learner_controller.php" method="post">
						<div class="row">
							<div class="col-md-6">
								<h4 class="animate-box">Types of Learner Test</h4>
								<h1 class="animate-box" data-animate-effect="fadeInLeft">Section 2</h1>
							</div>
						</div>
						<div class="row">
							<div class="col-md-10 image-content">
								<table class="table table-striped table-hover animate-box" data-animate-effect="fadeInRight" id="learnert2">
		                    	<tbody>
		                    		<?php while ($row2 = mysqli_fetch_array($s2)) {?>
	                    				<tr style="font-size: 15px;">
	                    					<td>
	                    						<b><?php echo $counter++ .'.'; ?>
	                    						<?php echo $row2['learner_question'] ?>
	                    						</b>
	                    					</td>
	                    				</tr>
	                    				<tr>
	                    					<td style="padding-bottom: 30px;">
	                    						<label class="radio-inline">
	                    							<input type="radio" name="l2_<?php echo $row2['learner_id']?>" id="idnv_<?php echo $row2['learner_id']?>" value="1" required> Never applies to me</label>
	                                			<label class="radio-inline">
	                                				<input type="radio" name="l2_<?php echo $row2['learner_id']?>" id="idso_<?php echo $row2['learner_id']?>" value="2" required> Sometimes applies to me</label>
	                                			<label class="radio-inline">
	                                				<input type="radio" name="l2_<?php echo $row2['learner_id']?>" id="idof_<?php echo $row2['learner_id']?>" value="3" required> Often applies to me</label>
	                                		</td>
	                    				</tr>
	                    			<?php } ?>
		                    	</tbody>
	                        	</table>
							</div>
							<div class="col-md-5">
								<div id="sticky_item">
									<div class="project-desc">
										<input type="submit" name="learnersubmit2" id="learners2" class="learners btn btn-primary" value="Continue">
										<p id="message"></p>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div id="ln3">
					<form class="f3" action="../controllers/learner_controller.php" method="post">
						<div class="row">
							<div class="col-md-6">
								<h4 class="animate-box">Types of Learner Test</h4>
								<h1 class="animate-box" data-animate-effect="fadeInLeft">Section 3</h1>
							</div>
						</div>
						<div class="row">
							<div class="col-md-10 image-content">
								<table class="table table-striped table-hover animate-box" data-animate-effect="fadeInRight" id="learnert3">
		                    	<tbody>
		                    		<?php while ($row3 = mysqli_fetch_array($s3)) {?>
	                    				<tr style="font-size: 15px;">
	                    					<td>
	                    						<b><?php echo $counter++ .'.'; ?>
	                    						<?php echo $row3['learner_question'] ?>
	                    						</b>
	                    					</td>
	                    				</tr>
	                    				<tr>
	                    					<td style="padding-bottom: 30px;">
	                    						<label class="radio-inline">
	                    							<input type="radio" name="l3_<?php echo $row3['learner_id']?>" id="idnv_<?php echo $row3['learner_id']?>" value="1" required> Never applies to me</label>
	                                			<label class="radio-inline">
	                                				<input type="radio" name="l3_<?php echo $row3['learner_id']?>" id="idso_<?php echo $row3['learner_id']?>" value="2" required> Sometimes applies to me</label>
	                                			<label class="radio-inline">
	                                				<input type="radio" name="l3_<?php echo $row3['learner_id']?>" id="idof_<?php echo $row3['learner_id']?>" value="3" required> Often applies to me</label>
	                                		</td>
	                    				</tr>
	                    			<?php } ?>
		                    	</tbody>
	                        	</table>
							</div>
							<div class="col-md-5">
								<div id="sticky_item">
									<div class="project-desc">
										<input type="submit" name="learnersubmit3" id="learners3" class="learners btn btn-primary" value="Submit and See Results">
										<p id="message"></p>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
    <div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md m-t-100" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticModalLabel">Please keep in mind</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><strong>PSYCHCARE</strong> is a free test that allows you to distinguish if you're experiencing issues such any psychological health related problems.
                     It is very important to open up with the people you can trust. Issues that are related to mental health needs attention and guidance as soon as possible. 
                     Through this system you can seek guidance on our reliable counselors here inside the University.
                    <br><h4> For the best experience and accurate result, please answer the questions honestly.</h4></p>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-primary">I agree and understand</button>
                </div>
            </div>
        </div>
    </div>
</body>
<?php require('../views/footer.php') ?>