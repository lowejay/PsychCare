<?php require('../controllers/session_controller.php');?>
<?php if(!isset($_SESSION['student_ID'])){unsetSesh();}?>
<?php require('header.php'); ?>
<body>
	<div id="colorlib-page">
	<?php require('sidebar.php'); ?>
	<!--HEADER SLIDER-->
		<div id="colorlib-main">
			<aside id="colorlib-hero" class="js-fullheight">
				<div class="flexslider js-fullheight">
					<ul class="slides">
					   	<li style="background-image: url(../images/dream3.jpg);">
					   		<div class="overlay"></div>
					   		<div class="container-fluid">
					   			<div class="row">
						   			<div class="col-md-8 col-md-offset-2 col-md-pull-2 js-fullheight slider-text">
						   				<div class="slider-text-inner">
						   					<div class="desc">
							   					<h1>Interpretation of Dreams</h1>
							   					<h2>Welcome to Dream Land?</h2>
							   					<?php if(isset($_SESSION['student_ID'])){ ?>
												<p><a href="../a.category/category.php"><button class="btn btn-info" name=""  id="" data-toggle="modal" data-target="#staticModal">Let's Get Started<i class="icon-arrow-right3"></i></button></a></p>
												<?php }else { ?>
												<p><button class="btn btn-info" name="autoclick"  id="autoclick" data-toggle="modal" data-target="#staticModal">Let's Get Started<i class="icon-arrow-right3"></i></button></p>
												<?php } ?>
											</div>
						   				</div>
						   			</div>
						   		</div>
					   		</div>
					   	</li>
					   	<li style="background-image: url(../images/md1.jpg);">
					   		<div class="overlay"></div>
					   		<div class="container-fluid">
					   			<div class="row">
						   			<div class="col-md-8 col-md-offset-2 col-md-pull-2 js-fullheight slider-text">
						   				<div class="slider-text-inner">
						   					<div class="desc">
							   					<h1>Psychological Disorder</h1>
													<h2>You Talk, We Listen</h2>
													<p><button class="btn btn-info" name="autoclick"  id="autoclick" data-toggle="modal" data-target="#staticModal">Let's Get Started<i class="icon-arrow-right3"></i></button></p>
												</div>
						   				</div>
						   			</div>
						   		</div>
					   		</div>
					   	</li>
					   	<li style="background-image: url(../images/personality1.jpg);">
					   		<div class="overlay"></div>
					   		<div class="container-fluid">
					   			<div class="row">
						   			<div class="col-md-8 col-md-offset-2 col-md-pull-2 js-fullheight slider-text">
						   				<div class="slider-text-inner">
						   					<div class="desc">
							   					<h1>Personality Test</h1>
												<h2>Know and Discover Yourself More</h2>
												<p><button class="btn btn-info" name="autoclick"  id="autoclick" data-toggle="modal" data-target="#staticModal">Let's Get Started<i class="icon-arrow-right3"></i></button></p>
											</div>
						   				</div>
						   			</div>
						   		</div>
					   		</div>
					   	</li>
					   	<li style="background-image: url(../images/learn1.jpg);">
					   		<div class="overlay"></div>
					   		<div class="container-fluid">
					   			<div class="row">
						   			<div class="col-md-8 col-md-offset-2 col-md-pull-2 js-fullheight slider-text">
						   				<div class="slider-text-inner">
						   					<div class="desc">
							   					<h1>Types of Learners</h1>
												<h2>What's your Learning Style? </h2>
												<p><button class="btn btn-info" name="autoclick"  id="autoclick" data-toggle="modal" data-target="#staticModal">Let's Get Started<i class="icon-arrow-right3"></i></button></p>
											</div>
						   				</div>
						   			</div>
						   		</div>
					   		</div>
					   	</li>
				  	</ul>
			  	</div>
			</aside>
	<!--END HEADER SLIDER-->
			<!--INTRODUCTION-->
				<div class="colorlib-about">
					<div>
						<a id="intro" tabindex="1" style="padding-top: 90px; margin-top: -90px;"></a>
					</div>
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6">
								<div class="about-img" style="background-image: url(../images/img-6.jpg);">
								<div class="about-img-2" style="background-image: url(../images/sleep.jpg);"></div>
								</div>
							</div>
							<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
								<div class="about-desc">
									<span class="heading-meta">Welcome &amp; Introduce</span>
									<h3>Hello We are from PSYCHCARE</h3>
									<p>When a person is free of depression, anxiety, excessive stress and other psychological problems, that person is abler to live life to the fullest and creates beautiful memories to share. Society today’s society is looking for existential support for the people who have mental health problems and wish to eradicate such problems. There are many reasons why a person should stop ignoring mental health problems given such as, better physical health, improved productivity, financial stability, less stress, and finally a long, happier life.</p>
								</div>
								<div class="fancy-collapse-panel">
									<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
										<div class="panel panel-default">
										    <div class="panel-heading" role="tab" id="headingOne">
										        <h4 class="panel-title">
										            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Why choose PsychCare?
										            </a>
										        </h4>
										    </div>
										    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
										         <div class="panel-body">
										            <div class="row">
											      		<div>
											      			<p>This is where PsychCare comes in; a system that functions as a determinant for students who has no knowledge of personality type, kind of learner, dreamer, and especially what mental problem a student carry. The system processes a series of questions that will render results and these results will be handled by the counsel offered. The researchers aim to help students who have suffered long enough from mental health problems and create a system that helps students who are afraid to reach out to counsel.</p>
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
			<!--END INTRODUCTION-->

			<!--ABOUT PSYCHCARE-->
				<div class="col-md-6">
					<a id="about" tabindex="1" style="padding-top: 60px; margin-top: -60px;"></a>
				</div>	
				<div class="colorlib-services">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6 col-md-offset-3 col-md-pull-3">
								<span class="heading-meta">So what is PsychCare?</span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
									<div class="colorlib-icon">
										<i class="icon-pen2"></i>
									</div>
									<div class="colorlib-text">
										<h3>Surveying</h3>
										<p>Is a Psychological Surveying System for the Department of Computer and Information Sciences. </p>
									</div>
								</div>

								<div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
									<div class="colorlib-icon">
										<i class="icon-user"></i>
									</div>
									<div class="colorlib-text">
										<h3>Personality Test</h3>
										<p>To determine your true personality and find out more about who you are and your strengths</p>
									</div>
								</div>

								<div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
									<div class="colorlib-icon">
										<i class="icon-params"></i>
									</div>
									<div class="colorlib-text">
										<h3>Psychological Disorder</h3>
										<p>To check your levels of stress, anxiety, or sadness and to seek help to the Guidance Counselor. </p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
									<div class="colorlib-icon">
										<i class="icon-diamond"></i>
									</div>
									<div class="colorlib-text">
										<h3>Four Categories</h3>
										<p>Has four main categories to choose the Psychological Disorder, Interpretation of Dreams, Types of Learner and Personality Test.</p>
									</div>
								</div>

								<div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
									<div class="colorlib-icon">
										<i class="icon-moon"></i>
									</div>
									<div class="colorlib-text">
										<h3>Interpretation of Dreams</h3>
										<p>Dedicated to explaining and helping people understand the interpretation of each symbols of yout dreams. </p>
									</div>
								</div>

								<div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
									<div class="colorlib-icon">
										<i class="icon-bulb"></i>
									</div>
									<div class="colorlib-text">
										<h3>Types of Learner</h3>
										<p>To know the different types of learning and to know what type of a learner you are. </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<!--END ABOUT PSYCHCARE-->

	<!--DEVELOPERS-->
			<div class="col-md-6">
				<a id="developers" tabindex="1" style="padding-top: 60px; margin-top: -60px;"></a>
			</div>
			<div class="colorlib-work">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3">
							<span class="heading-meta">Here are your Developers</span>
							<h2 class="colorlib-heading animate-box" data-animate-effect="fadeInLeft">The Developers</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="project" style="background-image: url(../images/1.jpg);">
								<div class="desc">
									<div class="con">
										<h1><a href="#">Louie Jay P. Albarico</a></h1>
										<h3><a href="#">Web Developer</a></h3>
										<p class="icon">
											<span><a href="#"><i class="icon-share3"></i></a></span>
											<span><a href="#"><i class="icon-eye"></i> 100</a></span>
											<span><a href="#"><i class="icon-heart"></i> 1000</a></span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="project" style="background-image: url(../images/2.jpg);">
								<div class="desc">
									<div class="con">
										<h1><a href="#">Anton Mikel C. Kintanar</a></h1>
										<h3><a href="#">Backend Developer</a></h3>
										<p class="icon">
											<span><a href="#"><i class="icon-share3"></i></a></span>
											<span><a href="#"><i class="icon-eye"></i> 100</a></span>
											<span><a href="#"><i class="icon-heart"></i> 1000</a></span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="project" style="background-image: url(../images/3.jpg);">
								<div class="desc">
									<div class="con">
										<h1><a href="#">Jhon Lerrie C. Garrido</a></h1>
										<h3><a href="#">Front-End Developer</a></h3>
										<p class="icon">
											<span><a href="#"><i class="icon-share3"></i></a></span>
											<span><a href="#"><i class="icon-eye"></i> 100</a></span>
											<span><a href="#"><i class="icon-heart"></i> 1000</a></span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="project" style="background-image: url(../images/4.1.jpg);">
								<div class="desc">
									<div class="con">
										<h1><a href="#">Darlene Fely D. Guaca</a></h1>
										<h3><a href="#">Front-End Developer</a></h3>
										<p class="icon">
											<span><a href="#"><i class="icon-share3"></i></a></span>
											<span><a href="#"><i class="icon-eye"></i> 100</a></span>
											<span><a href="#"><i class="icon-heart"></i> 1</a></span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	<!--END DEVELOPERS-->
		</div>
	</div>
	<!--MODAL LOGIN-->
		<div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-md" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticModalLabel">Please Log In</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form name="loginForm" method="POST" action="../controllers/login_controller.php">
						<div class="modal-body"> 
							<div class="row">
								<div class="col-sm-12 col-md-12">
									<div class="form-group m-b-30">
										<p align="left">Id Number</p>
										<input type="text" name="loginID" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Id Number" required/>
									</div>
								</div>
								<div class="col-sm-12 col-md-12">
									<div class="form-group m-b-30">
										<p align="left">Password</p>
										<input type="password" name="loginPassword" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Password" required/>			
										<br>
										<input type="submit" name="btnLoginSubmit" class="btn btn-main" value="Log In">
									</div>
								</div>
							</div>
			  			</div>
					</form>
				</div>
			</div>
		</div>
	<!--END MODAL LOGIN-->
</body>
<?php require('footer.php'); ?>