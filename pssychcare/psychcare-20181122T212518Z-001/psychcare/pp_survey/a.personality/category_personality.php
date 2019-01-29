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
				   	<li style="background-image: url(../images/personality2.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-8 col-md-offset-2 col-md-pull-2 js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<div class="desc">
						   					<h1>Personality Test</h1>
						   					<h2>Know and Discover Yourself More</h2>
						   					<div class="row">
												<div class="col-md-8 col-md-offset-2 col-md-pull-2">
													<a href="test_personality.php" button type="button" name="autoclick"  id="autoclick" class="btn btn-primary btn btn-md">
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
							<div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url(../images/person3.jpg);">
								<div class="about-img-2 animate-box" data-animate-effect="fadeInRight" style="background-image: url(../images/person4.jpg);"></div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="about-desc">
								<h3>Personality Test</h3>
								<p><strong>Personality testing</strong> refers to techniques that are used to accurately and consistently measure personality. Take this free personality test and find out more about who you are and your strengths. This is valuable information for choosing a career.</p>
							</div>
							<div class="fancy-collapse-panel">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingOne">
									        <h4 class="panel-title">
									            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Why should i take the exam?
									            </a>
									        </h4>
									    </div>
									    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									         <div class="panel-body">
									            <div class="row">
										    		<p>In the result you will find your core personality type(s) and how that interacts with your life, career and personal succes. Learn what to pursue, what to avoid and how your behavior differs from that of others.</p>
										    		<p>In the free report, you will learn how you score on the most important personality traits. Additionally you can even upgrade to an extended report if you like. And by that you will learn the psychological model in measuring your personality. </p>
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
	</div>
	<!--END OF INTRODUCTION-->

	</body>
</html>
<?php include('../views/footer.php') ?>
