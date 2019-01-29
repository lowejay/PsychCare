<?php require('../controllers/session_controller.php'); 
if(!$_SESSION['student_ID']){header('Location: ../index.php');}?>
<?php include('../views/header.php') ?>
<?php include('../views/category_sidebar.php') ?>

<body>

	<!--CATEGORY-->
		<div id="colorlib-main">
			<div class="colorlib-work">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3">
							<span class="heading-meta">Choose from the four</span>
							<h1 class="animate-box" data-animate-effect="fadeInLeft">CATEGORIES</h1>
						</div>
					</div>
					<div class="row">
						<a href="../a.disorder/category_disorder.php">
							<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
								<div class="project" style="background-image: url(../images/md.jpg);">
									<div class="desc">
										<div class="con">
											<h1 style="color: white;">Psychological Disorder</h1>
											<h3 style="color: white;">You Talk, We Listen</h3>
											<span class="read-more">Begin! <i class="icon-arrow-right3"></i></span>
										</div>
									</div>
								</div>
							</div>
						</a>
						<a href="../a.dreams/category_dreams.php">
							<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
								<div class="project" style="background-image: url(../images/dreams1.jpg);">
									<div class="desc">
										<div class="con">
											<h1 style="color: white;"> Interpretation of Dreams</h1>
											<h3 style="color: white;">Welcome to Dream Land</h3>
											<span class="read-more">Begin! <i class="icon-arrow-right3"></i></span>
										</div>
									</div>
								</div>
							</div>
						</a>
						<a href="../a.learner/category_learner.php">
							<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
								<div class="project" style="background-image: url(../images/reading.jpg);">
									<div class="desc">
										<div class="con">
											<h1 style="color: white;">Types of Learner</h1>
											<h3 style="color: white;">What's your Learning Style?</h3>
											<span class="read-more">Begin! <i class="icon-arrow-right3"></i></span>
										</div>
									</div>
								</div>
							</div>
						</a>
						<a href="../a.personality/category_personality.php">
							<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
								<div class="project" style="background-image: url(../images/person3.jpg);">
									<div class="desc">
										<div class="con">
											<h1 style="color: white;">Personality Test</h1>
											<h3 style="color: white;">Know and Discover Yourself More</h3>
											<span class="read-more">Begin! <i class="icon-arrow-right3"></i></span>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	<!--END CATEGORY-->

	</body>
</html>
<?php include('../views/footer.php') ?>
