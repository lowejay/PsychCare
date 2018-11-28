<?php require('../controllers/session_controller.php'); 
if(!$_SESSION['student_ID']){header('Location: ../index.php');}?>
<?php  
$score = $_GET['score']; 
?>
<?php include('../views/header.php') ?>
<?php include('../views/category_sidebar.php') ?>
<?php  ?>
	<body>
	<!--BODY-->
		<div id="colorlib-main">
			<div class="colorlib-about">
				<div class="container-fluid">
	<?php if ($score >= 0 && $score <=10 ){
		?>
					<div class="row">
						<div class="col-md-6">
							<div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url(../images/disorder/dep1.jpg);">
								<div class="about-img-2 animate-box" data-animate-effect="fadeInRight" style="background-image: url(../images/disorder/dep2.jpg);"></div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="about-desc">
								<span class="heading-meta">NICE!</span>
								<h3>You scored a total of <?php echo $score; ?> point(s)</h3>
								<p>This is the results from your exam.</p>
							</div>
							<div class="fancy-collapse-panel">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingOne">
									        <h4 class="panel-title">
									            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">MINIMAL DEPRESSION
									            </a>
									        </h4>
									    </div>
									    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									         <div class="panel-body">
									            <div class="row">
										      		<div>
										      			<p>Your results indicate that you have none or very few symptoms of depression. 
										      			No worries, just keep doing what you do best!
										      			<br>
										      			<br>
										      			This screen is not meant to be a diagnosis or the elimination of a diagnosis, a trained medical or mental health professionals such as our counselors in the University of San Carlos can help clarify and diagnose depression!
										      			<br>
										      			<br>
										      			If you feel like your feelings, thoughts or behaviors get worse, screen again! </p>
										      		</div>
										      	</div>
									         </div>
									    </div>
						<div class="panel panel-default">
						    <div class="panel-heading" role="tab" id="headingTwo">
						        <h4 class="panel-title">
						            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" 
						            aria-controls="collapseTwo">Wanna know the score breakdown?
						            </a>
						        </h4>
						    </div>
						    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
						        <div class="panel-body">
						            <p>SCORE BREAKDOWN!</p>
						            	<ul>
											<li>If your score ranged between 1 to 10, 
												<br>MINIMAL DEPRESSION</li>
											<li>If your score ranged between 11 to 20, 
												<br>MILD DEPRESSION</li>
											<li>If your score ranged between 21 to 30, 
												<br>MODERATE DEPRESSION</li>
											<li>If your score ranged between 31 to 40, 
												<br>MODERATELY SEVERE DEPRESSION</li>
											<li>If your score ranged between 41 to 50, 
												<br>SEVERE DEPRESSION</li>
										</ul>	
						        </div>
						    </div>
						</div>
									</div>
									 <br><p><a href="test_disorder.php" class="btn btn-primary">Take Another Screen</a></p>
								</div>
							</div>
						</div>
					</div>
					<?php  }else if ($score >= 11 && $score <=20 ){?>
					<div class="row">
						<div class="col-md-6">
							<div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url(../images/disorder/dep_3.jpg);">
								<div class="about-img-2 animate-box" data-animate-effect="fadeInRight" style="background-image: url(../images/disorder/dep_4.jpg);"></div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="about-desc">
								<span class="heading-meta">OH NO!</span>
								<h3>You scored a total of <?php echo $score; ?> point(s)</h3>
								<p>This is the results from your exam.</p>
							</div>
							<div class="fancy-collapse-panel">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingOne">
									        <h4 class="panel-title">
									            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">MILD DEPRESSION
									            </a>
									        </h4>
									    </div>
									    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									         <div class="panel-body">
									            <div class="row">
										      		<div>
										      			<p>Mild depression involves more than just feeling blue temporarily. Your symptoms can go on for days and are noticeable enough to interfere with your usual activities.
										      			While medical treatment may not be needed, mild depression won’t necessarily go away on its own. In fact, when left alone, mild depression can progress to more severe form.
										      			<br>
										      			<br>
										      			This screen is not meant to be a diagnosis or the elimination of a diagnosis, a trained medical or mental health professionals such as our counselors in the University of San Carlos can help clarify and diagnose depression!
										      			<br>
										      			<br>
										      			If you feel like your feelings, thoughts or behaviors get worse, screen again! </p>
										      		</div>
										      	</div>
									         </div>
									    </div>
						<div class="panel panel-default">
						    <div class="panel-heading" role="tab" id="headingTwo">
						        <h4 class="panel-title">
						            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" 
						            aria-controls="collapseTwo">Wanna know the score breakdown?
						            </a>
						        </h4>
						    </div>
						    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
						        <div class="panel-body">
						            <p>SCORE BREAKDOWN!</p>
						            	<ul>
											<li>If your score ranged between 1 to 10, 
												<br>MINIMAL DEPRESSION</li>
											<li>If your score ranged between 11 to 20, 
												<br>MILD DEPRESSION</li>
											<li>If your score ranged between 21 to 30, 
												<br>MODERATE DEPRESSION</li>
											<li>If your score ranged between 31 to 40, 
												<br>MODERATELY SEVERE DEPRESSION</li>
											<li>If your score ranged between 41 to 50, 
												<br>SEVERE DEPRESSION</li>
										</ul>	
						        </div>
						    </div>
						</div>
									</div><br><p><a href="test_disorder.php" class="btn btn-primary">Take Another Screen</a></p>
								</div>
							</div>
						</div>
					</div>
					<?php  }else if ($score >= 21 && $score <=30 ){
		?>
					<div class="row">
						<div class="col-md-6">
							<div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url(../images/disorder/dep_5.jpg);">
								<div class="about-img-2 animate-box" data-animate-effect="fadeInRight" style="background-image: url(../images/disorder/dep_6.jpg);"></div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="about-desc">
								<span class="heading-meta">WATCH OUT!</span>
								<h3>You scored a total of <?php echo $score; ?> point(s)</h3>
								<p>This is the results from your exam.</p>
							</div>
							<div class="fancy-collapse-panel">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingOne">
									        <h4 class="panel-title">
									            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">MODERATE DEPRESSION
									            </a>
									        </h4>
									    </div>
									    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									         <div class="panel-body">
									            <div class="row">
										      		<div>
										      			<p>A reduced interest in normally pleasurable activities becomes no interest – a real lack of interest and motivation. Simple things start to require real effort or just get neglected.There is usually a detectable reduction in self confidence and/or self esteem which can have a ‘snowball’ effect as we become less motivated and hence less productive. Often we start to worry about things unnecessarily such as performance at work, even if we are managing to maintain our previous standards, or more sensitive and susceptible to feeling hurt or offended within personal relationships.
										      			<br>
										      			<br>
										      			This screen is not meant to be a diagnosis or the elimination of a diagnosis, a trained medical or mental health professionals such as our counselors in the University of San Carlos can help clarify and diagnose depression!
										      			<br>
										      			<br>
										      			If you feel like your feelings, thoughts or behaviors get worse, screen again! </p>		
										      		</div>
										      	</div>
									         </div>
									    </div>
						<div class="panel panel-default">
						    <div class="panel-heading" role="tab" id="headingTwo">
						        <h4 class="panel-title">
						            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" 
						            aria-controls="collapseTwo">Wanna know the score breakdown?
						            </a>
						        </h4>
						    </div>
						    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
						        <div class="panel-body">
						            <p>SCORE BREAKDOWN!</p>
						            	<ul>
											<li>If your score ranged between 1 to 10, 
												<br>MINIMAL DEPRESSION</li>
											<li>If your score ranged between 11 to 20, 
												<br>MILD DEPRESSION</li>
											<li>If your score ranged between 21 to 30, 
												<br>MODERATE DEPRESSION</li>
											<li>If your score ranged between 31 to 40, 
												<br>MODERATELY SEVERE DEPRESSION</li>
											<li>If your score ranged between 41 to 50, 
												<br>SEVERE DEPRESSION</li>
										</ul>	
						        </div>
						    </div>
						</div>
									</div><br><p><a href="test_disorder.php" class="btn btn-primary">Take Another Screen</a></p>
								</div>
							</div>
						</div>
					</div>
					<?php  }else if ($score >= 31 && $score <=40 ){
		?>
					<div class="row">
						<div class="col-md-6">
							<div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url(../images/disorder/dep_7.jpg);">
								<div class="about-img-2 animate-box" data-animate-effect="fadeInRight" style="background-image: url(../images/disorder/dep_8.jpg);"></div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="about-desc">
								<span class="heading-meta">WARNING!!</span>
								<h3>You scored a total of <?php echo $score; ?> point(s)</h3>
								<p>This is the results from your exam.</p>
							</div>
							<div class="fancy-collapse-panel">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingOne">
									        <h4 class="panel-title">
									            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">MODERATELY SEVERE DEPRESSION!
									            </a>
									        </h4>
									    </div>
									    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									         <div class="panel-body">
									            <div class="row">
										      		<div>
										      			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
										      		</div>
										      	</div>
									         </div>
									    </div>
						<div class="panel panel-default">
						    <div class="panel-heading" role="tab" id="headingTwo">
						        <h4 class="panel-title">
						            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" 
						            aria-controls="collapseTwo">Wanna know the score breakdown?
						            </a>
						        </h4>
						    </div>
						    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
						        <div class="panel-body">
						            <p>SCORE BREAKDOWN!</p>
						            	<ul>
											<li>If your score ranged between 1 to 10, 
												<br>MINIMAL DEPRESSION</li>
											<li>If your score ranged between 11 to 20, 
												<br>MILD DEPRESSION</li>
											<li>If your score ranged between 21 to 30, 
												<br>MODERATE DEPRESSION</li>
											<li>If your score ranged between 31 to 40, 
												<br>MODERATELY SEVERE DEPRESSION</li>
											<li>If your score ranged between 41 to 50, 
												<br>SEVERE DEPRESSION</li>
										</ul>	
						        </div>
						    </div>
						</div>
									</div><br><p><a href="test_disorder.php" class="btn btn-primary">Take Another Screen</a></p>
								</div>
							</div>
						</div>
					</div>
					<?php  }else if ($score >= 41 && $score <=50 ){
		?>
					<div class="row">
						<div class="col-md-6">
							<div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url(../images/disorder/dep_9.jpg);">
								<div class="about-img-2 animate-box" data-animate-effect="fadeInRight" style="background-image: url(../images/disorder/dep_10.jpg);"></div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="about-desc">
								<span class="heading-meta">BAD NEWS!!!!</span>
								<h3>You scored a total of <?php echo $score; ?> point(s)</h3>
								<p>This is the results from your exam.</p>
							</div>
							<div class="fancy-collapse-panel">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingOne">
									        <h4 class="panel-title">
									            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">SEVERE DEPRESSION
									            </a>
									        </h4>
									    </div>
									    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									         <div class="panel-body">
									            <div class="row">
										      		<div>
										      			<p>Severe or Major depression causes considerable distress or agitation, loss of self-esteem or feelings of uselessness and guilt. We are unlikely to be able to continue with work, social and domestic activities. Severe (or Major) depression usually causes severe enough symptoms for a change to be noticeable by those around us even if we try to mask how we are feeling. A person with major depression will usually experience most, if not all of the symptoms listed on ‘Symptoms of depression’.
										      			<br>
										      			<br>
										      			Please tend to professionals and hold an appointment!
										      			<br>
										      			<a href="../../student/dashboard.php" class="btn btn-primary">Please Consult</a></p>
										      			<br>
										      		</p>
										      		</div>
										      	</div>
									         </div>
									    </div>
						<div class="panel panel-default">
						    <div class="panel-heading" role="tab" id="headingTwo">
						        <h4 class="panel-title">
						            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" 
						            aria-controls="collapseTwo">Wanna know the score breakdown?
						            </a>
						        </h4>
						    </div>
						    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
						        <div class="panel-body">
						            <p>SCORE BREAKDOWN!</p>
						            	<ul>
												<li>If your score ranged between 1 to 10, 
													<br>MINIMAL DEPRESSION</li>
												<li>If your score ranged between 11 to 20, 
													<br>MILD DEPRESSION</li>
												<li>If your score ranged between 21 to 30, 
													<br>MODERATE DEPRESSION</li>
												<li>If your score ranged between 31 to 40, 
													<br>MODERATELY SEVERE DEPRESSION</li>
												<li>If your score ranged between 41 to 50, 
													<br>SEVERE DEPRESSION</li>
										</ul>	
						        </div>
						    </div>
						</div>
									</div><br><p><a href="test_disorder.php" class="btn btn-primary">Take Another Screen</a></p>
								</div>
							</div>
						</div>
					</div>
					<?php }?>
				</div>
			</div>

			

			<div id="get-in-touch" class="colorlib-bg-color">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<h2>Get in Touch!</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<p class="colorlib-lead">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							<p><a href="#" class="btn btn-primary btn-learn">Contact me!</a></p>
						</div>
						
					</div>
				</div>
			</div>
		</div>

	<!--END BODY-->

	</body>
</html>
<?php require('../views/footer.php') ?>