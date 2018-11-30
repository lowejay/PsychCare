<?php require('../controllers/session_controller.php'); 
if(!$_SESSION['student_ID']){header('Location: ../index.php');}?>
<?php include('../views/header.php') ?>
<?php include('../views/category_sidebar.php') ?>
<body>

	<!--HEADER-->
		<div id="colorlib-main">
			<aside id="colorlib-hero" class="js-fullheight">
				<div class="flexslider js-fullheight">
					<ul class="slides">
				   	<li style="background-image: url(../images/pd.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-8 col-md-offset-2 col-md-pull-2 js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<div class="desc">
						   					<h1>Psychological Test</h1>
						   					<h2>A test for depression <br>You Talk, We Listen</h2>
						   					<div class="row">
												<div class="col-md-8 col-md-offset-2 col-md-pull-2">
													<a href="test_disorder.php" button type="button" name="autoclick"  id="autoclick" class="btn btn-primary btn btn-md">
														<i class="fa fa-user"></i> TAKE THE TEST HERE!
													</a>
												</div>	
											</div>
										</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				  	</ul>
			  	</div>
			</aside>
	<!--END HEADER-->

	<!--INTRODUCTION-->
			<div class="colorlib-about">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6">
							<div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url(../images/md1.jpg);">
								<div class="about-img-2 animate-box" data-animate-effect="fadeInRight" style="background-image: url(../images/md.jpg);"></div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="about-desc">
								<h3>What is Psychological Disorder?</h3>
								<p>The term <strong>Psychological Disorder</strong> is sometimes used to refer to what are more frequently known as mental disorders or psychiatric disorders. Mental disorders are patterns of behavioral or psychological symptoms that impact multiple areas of life. These disorders create distress for the person experiencing these symptoms.</p>
							</div>
							<div class="fancy-collapse-panel">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingOne">
									        <h4 class="panel-title">
									            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">What causes Psychological Disorder?
									            </a>
									        </h4>
									    </div>
									    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									         <div class="panel-body">
									            <div class="row">
										    		<p><strong>Psychological</strong> factors that may contribute to mental illness include: Severe psychological trauma suffered as a child, such as emotional, physical, or sexual abuse. An important early loss, such as the loss of a parent. Neglect</p>
										    		<ul>
														<li>Genetics (heredity) </li>
														<li>Infections</li>
														<li>Brain defects or injury</li>
														<li>Prenatal damage</li>
														<li>Substance abuse </li>
													</ul>
										      	</div>
									         </div>
									    </div>
									</div>
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingTwo">
									        <h4 class="panel-title">
									            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">What are the 5 signs of Mental Illness?
									            </a>
									        </h4>
									    </div>
									    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									        <div class="panel-body">
									            <p>5 Warning Signs of Mental Health Risk</p>
									            	<ul>
														<li>A Change in Personality. If someone is acting like a very different person, or not acting or feeling like themself, this is a warning sign. </li>
														<li>Uncharacteristic Anxiety, Anger, or Moodiness.</li>
														<li>Social Withdrawal and Isolation.</li>
														<li>Lack of Self-Care or Risky Behaviors.</li>
														<li>A Sense of Hopelessness or Feeling Overwhelmed. </li>
													</ul>	
									        </div>
									    </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--END OF INTRODUCTION-->


	</body>
</html>
<?php include('../views/footer.php'); ?>
