<?php require('../controllers/session_controller.php'); 
if(!$_SESSION['student_ID']){header('Location: ../index.php');}?>
<?php  
$lr = $_GET['result'];
?>
<?php include('../views/header.php') ?>
<?php include('../views/category_sidebar.php') ?>
<?php  ?>
	<body>
	<!--BODY-->
		<div id="colorlib-main">
			<div class="colorlib-about">
				<div class="container-fluid">
	<?php if ($lr == 'Visual'){
		?>
					<div class="row">
						<div class="col-md-6">
							<div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url(../images/disorder/learn3.jpg);">
								<div class="about-img-2 animate-box" data-animate-effect="fadeInRight" style="background-image: url(../images/disorder/learn1.jpg);"></div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="about-desc">
								<span class="heading-meta">This is who you are!</span>
								<h3>You are a Visual Learner!</h3>
							</div>
						<div class="fancy-collapse-panel">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingOne">
									        <h4 class="panel-title">
									            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Visual Learner
									            </a>
									        </h4>
									    </div>
						    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
						         <div class="panel-body">
						            <div class="row">
							      		<div>
							      			<p> Learns by seeing or watching demonstrations. Recognizes words by sight; relies on configurations of words. Likes description; sometimes stops  reading to stare into space and imagine scene; intense concentration. Tends to be a good, particularly when young; spacing and size are good; appearance is important. Remember faces, but forgets names; writes things down; takes notes.
							      			<br>
							      			<br>
							      			Vivid imagination; thinks in pictures; visualizes in detail. Unaware of sounds; distracted by movement. Deliberate; plans in advance; organizes thoughts by writing them; lists problems. Stares or doodles; finds something. Looks around or examines structure
							      			<br>
							      			<br>
							      			Feel free to take the test again! </p>
							      		</div>
							      	</div>
						        </div>
						    </div>
						</div>
						         	<br><p><a href="test_personality.php" class="btn btn-primary">Take Another Screen</a></p>
								</div>
							</div>
						</div>
					</div>
<?php  }else if ($lr == 'Auditory'){?>
					<div class="row">
						<div class="col-md-6">
							<div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url(../images/disorder/learn6.jpg);">
							<div class="about-img-2 animate-box" data-animate-effect="fadeInRight" style="background-image: url(../images/disorder/learn5.jpg);">
							</div>
							</div>
						</div>
							<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="about-desc">
								<span class="heading-meta">Well that's rare!</span>
								<h3>You are an Auditory Learner</h3>
							</div>
							<div class="fancy-collapse-panel">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingOne">
									        <h4 class="panel-title">
									            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Auditory Learner</a>
									        </h4>
									    </div>
						    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
						         <div class="panel-body">
						            <div class="row">
							      		<div>
							      			<p>Learns through verbal instructions from self or others. Uses a phonics approach has auditory word attack skills. Enjoys dialogue and plays; avoids lengthy descriptions; unaware of illustrations; moves lips or sub-vocalizes. Has more difficulty learning in initial stages; tends to write lightly. Remembers names, but forgets faces; remembers by auditory repetition.
							      			<br>
							      			<br>
							      				Easily distracted by sounds. Talks problems out; tries solutions verbally or sub-vocally; talks self through problems. Hums, talks to self, or talks to others. Talks about situation; discusses pros and cons of what to do.
							      			<br>
							      			<br>
							      				Feel free to take the test again!</p>
							      		</div>
							      	</div>
						         </div>
						    </div>
									<br><p><a href="test_learner.php" class="btn btn-primary">Take Another Screen</a></p>
								</div>
							</div>
						</div>
					</div>
<?php  }else if ($lr == 'Kinesthetic'){?>
					<div class="row">
						<div class="col-md-6">
							<div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url(../images/disorder/learn9.jpg);">
								<div class="about-img-2 animate-box" data-animate-effect="fadeInRight" style="background-image: url(../images/disorder/learn8.jpg);"></div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="about-desc">
								<span class="heading-meta">Who would've thought?</span>
								<h3>You are a Kinesthetic Learner</h3>
							</div>
							<div class="fancy-collapse-panel">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingOne">
									        <h4 class="panel-title">
									            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">KINESTHETIC LEARNER
									            </a>
									        </h4>
									    </div>
						    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
						         <div class="panel-body">
						            <div class="row">
							      		<div>
							      			<p>Learns by doing and direct involvement. Often is a poor speller; writes words to determine if they “feel” right. Prefers stories where action occurs early; fidgets while reading; not an avid reader. Good initially, but deteriorates when space becomes smaller; pushes harder on writing instrument. Remembers best what was done, but not what was seen or talked about.
							      			<br>
							      			<br>
							      			Imagery not important; images that do occur are accompanied by movement. Not attentive to visual or auditory presentation so may seem distracted. Attacks problem physically; impulsive; often selects solution involving greatest activity. Fidgets or finds reasons to move. Tries things out; touches, feels or manipulates.
							      			<br>
							      			<br>
							      			Feel free to take the test again! </p>										      		
							      		</div>
							      	</div>
						         </div>    
						    </div> 
						    	<p><br><a href="test_learner.php" class="btn btn-primary">Take Another Screen</a></p>
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