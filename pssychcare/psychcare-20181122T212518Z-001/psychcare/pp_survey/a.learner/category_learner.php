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
				   	<li style="background-image: url(../images/learn2.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-8 col-md-offset-2 col-md-pull-2 js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<div class="desc">
						   					<h1>Types of Learner</h1>
						   					<h2>What's your learning style?</h2>
						   					<div class="row">
												<div class="col-md-8 col-md-offset-2 col-md-pull-2">
													<a href="test_learner.php" button type="button" name="autoclick"  id="autoclick" class="btn btn-primary btn btn-md">
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
							<div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url(../images/img-4.jpg);">
								<div class="about-img-2 animate-box" data-animate-effect="fadeInRight" style="background-image: url(../images/learners.jpg);"></div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="about-desc">
								<h3>What are the different types of learners?</h3>
								<p>When it comes to training methods, it’s important to know the different ways in which people learn and retain information. Training methods should be adjusted to the different types of learners to ensure they have the best experience.</p>

								<p>According to Tech News, the different learning styles varies, a typical classroom will contain 20% Visual Learners, 25% auditory learners, 15% kinaesthetic learner and the remaining 30% consisting of students with mixed learning styles. This is an interesting statistic that supports that learning methods should cater to all types of learners.</p>
							</div>
							<div class="fancy-collapse-panel">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingOne">
									        <h4 class="panel-title">
									            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">The 8 Learning Styles
									            </a>
									        </h4>
									    </div>
									    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									         <div class="panel-body">
									            <div class="row">
										    		<ul>
														<li><span class="icon"><i class="icon-book2">-<strong>The Linguistic Learner</strong></i></span></li>
														<li><span class="icon"><i class="icon-heart3">-<strong>The Kinesthetic Learner</strong></i></span></li>
														<li><span class="icon"><i class="icon-eye2">-<strong>The Visual / Spatial Learner</strong></i></span></li>
													</ul>
										      	</div>
									         </div>
									    </div>
									</div>
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingTwo">
									        <h4 class="panel-title">
									            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Meaning
									            </a>
									        </h4>
									    </div>
									    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									        <div class="panel-body">									       
								            	<ul>
													<li><strong>The Linguistic Learner</strong> - is one who learns best through linguistic skills including reading, writing, listening, or speaking.</li>
													<li><strong>The Kinesthetic Learner</strong> - is a person that learns best by actually doing something.</li>
													<li><strong>The Visual / Spatial Learner</strong> - is a person who learns best if there is visual aids around to guide the learning process.</li>
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
<?php include('../views/footer.php') ?>

