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
	<?php if ($score >= 38 && $score <=50 ){
		?>
					<div class="row">
						<div class="col-md-6">
							<div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url(../images/disorder/personality_extravert.jpg);">
								<div class="about-img-2 animate-box" data-animate-effect="fadeInRight" style="background-image: url(../images/disorder/personality_extravert2.jpg);"></div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="about-desc">
								<span class="heading-meta">This is who you are!</span>
								<h3>You scored a total of <?php echo $score; ?> point(s)</h3>
								<p>This is the results from your exam.</p>
							</div>
						<div class="fancy-collapse-panel">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingOne">
									        <h4 class="panel-title">
									            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">YOU ARE AN EXTRAVERT
									            </a>
									        </h4>
									    </div>
						    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
						         <div class="panel-body">
						            <div class="row">
							      		<div>
							      			<p> You are imaginitive! And very experimental. You are the kind of person that does things in a different way! Extraverts tend to enjoy human interactions and to be enthusiastic, talkative, assertive, and gregarious. Extraverts are energized and thrive off being around other people. 
							      			<br>
							      			<br>
							      			An extraverted person is likely to enjoy time spent with people and find less reward in time spent alone. They tend to be energized when around other people, and they are more prone to boredom when they are by themselves.
							      			<br>
							      			<br>
							      			Feel free to take the test again! </p>
							      		</div>
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
											<li>If your score ranged between 0 to 16, Introvert</li>
											<li>If your score ranged between 17 to 37, Ambivert</li>
											<li>If your score ranged between 38 to 50, Extravert</li>
										</ul>	
						        </div>
						    </div>
						</div>
						         	<br><p><a href="test_personality.php" class="btn btn-primary">Take Another Screen</a></p>
								</div>
							</div>
						</div>
					</div>
<?php  }else if ($score >=17  && $score <=37 ){?>
					<div class="row">
						<div class="col-md-6">
							<div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url(../images/disorder/personality_introvert.jpg);">
							<div class="about-img-2 animate-box" data-animate-effect="fadeInRight" style="background-image: url(../images/disorder/personality_extravert.jpg);">
							</div>
							</div>
						</div>
							<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="about-desc">
								<span class="heading-meta">Well that's rare!</span>
								<h3>You scored a total of <?php echo $score; ?> point(s)</h3>
								<p>This is the results from your exam.</p>
							</div>
							<div class="fancy-collapse-panel">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingOne">
									        <h4 class="panel-title">
									            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">AMBIVERT!</a>
									        </h4>
									    </div>
						    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
						         <div class="panel-body">
						            <div class="row">
							      		<div>
							      			<p>Ambiverts have a distinct advantage over true introverts and extroverts. 
							      			   Because their personality doesn’t lean too heavily in either direction, 
							      			   they have a much easier time adjusting their approach to people based on 
							      			   the situation. This enables them to connect more easily, and more deeply, 
							      			   with a wider variety of people.
							      			<br>
							      			<br>
							      				An ambivert is moderately comfortable with groups and social interaction, 
							      				but also relishes time alone, away from a crowd. In simpler words, an ambivert 
							      				is a person whose behaviour changes according to the situation he/she is in.
							      			<br>
							      			<br>
							      				Feel free to take the test again!</p>
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
											<li>If your score ranged between 0 to 16, Introvert</li>
											<li>If your score ranged between 17 to 37, Ambivert</li>
											<li>If your score ranged between 38 to 50, Extravert</li>
										</ul>	
						        </div>
						    </div>
							</div>
									<br><p><a href="test_personality.php" class="btn btn-primary">Take Another Screen</a></p>
								</div>
							</div>
						</div>
					</div>
<?php  }else if ($score >= 0 && $score <= 16 ){?>
					<div class="row">
						<div class="col-md-6">
							<div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url(../images/disorder/personality_introvert.jpg);">
								<div class="about-img-2 animate-box" data-animate-effect="fadeInRight" style="background-image: url(../images/disorder/personality_introvert2.jpg);"></div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="about-desc">
								<span class="heading-meta">Who would've thought?</span>
								<h3>You scored a total of <?php echo $score; ?> point(s)</h3>
								<p>This is the results from your exam.</p>
							</div>
							<div class="fancy-collapse-panel">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingOne">
									        <h4 class="panel-title">
									            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">INTROVERT
									            </a>
									        </h4>
									    </div>
						    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
						         <div class="panel-body">
						            <div class="row">
							      		<div>
							      			<p>An introvert prefers to spend time alone in order to recharge their inner being. An introvert may appear to be shy to others, but that is not necessarily an accurate label. Being among groups of friends, family and even strangers can be wonderfully stimulating and joyous occasions. 
							      			<br>
							      			<br>
							      			Interacting with people and attention to multiple sources of stimuli tends to draw down an introvert's energy causing them to eventually withdraw to spend time alone to re-energize. Small talk and pointless conversations tend to draw down an introvert's energy rapidly. 
							      			<br>
							      			<br>
							      			Feel free to take the test again! </p>										      		
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
											<li>If your score ranged between 0 to 16, Introvert</li>
											<li>If your score ranged between 17 to 37, Ambivert</li>
											<li>If your score ranged between 38 to 50, Extravert</li>
										</ul>	
						       		</div>
						    	</div>
								</div>
						    		<p><br><a href="test_personality.php" class="btn btn-primary">Take Another Screen</a></p>
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