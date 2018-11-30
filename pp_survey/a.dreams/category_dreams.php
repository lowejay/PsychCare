<?php require('../controllers/session_controller.php'); if(!$_SESSION['student_ID']){header('Location: ../index.php');}
require('../views/header.php');require('../views/category_sidebar.php');?>
<body>
	<div id="colorlib-main">
		<aside id="colorlib-hero" class="js-fullheight">
			<div class="flexslider js-fullheight">
				<ul class="slides">
			   	<li style="background-image: url(../images/dream1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-md-offset-2 col-md-pull-2 js-fullheight slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
					   					<h1>Interpretation of Dreams</h1>
					   					<h2>Welcome to Dreamland</h2>
									</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		<div class="colorlib-about">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6">
						<div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url(../images/dreams.jpg);">
							<div class="about-img-2 animate-box" data-animate-effect="fadeInRight" style="background-image: url(../images/sleep.jpg);"></div>
						</div>
					</div>
					<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
						<div class="about-desc">
							<h3>Welcome to Dream Land</h3>
							<p>A <strong>dream</strong> is a succession of images, ideas, emotions, and sensations that usually occur involuntarily in the mind during certain stages of sleep. Dream Interpretation is the attempt at drawing meaning from dreams and searching for an underlying message. The scientific study of dreams is called oneirology.</p>
						</div>
						<div class="fancy-collapse-panel">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
								    <div class="panel-heading" role="tab" id="headingOne">
								        <h4 class="panel-title">
								            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">So what is Dreaming?
								            </a>
								        </h4>
								    </div>
								    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								         <div class="panel-body">
								            <div class="row">
									    		<p><strong>Dreams are a universal human experience</strong> that can be described as a state of consciousness characterized by sensory, cognitive and emotional occurrences during sleep. The dreamer has reduced control over the content, visual images and activation of the memory. There is no cognitive state that has been as extensively studied and yet as frequently misunderstood as dreaming. These elements create a novel "reality" out of seemingly nothing, producing an experience with a lifelike timeframe and connections.</p>
									      	</div>
								         </div>
								    </div>
								</div>
								<div class="panel panel-default">
								    <div class="panel-heading" role="tab" id="headingTwo">
								        <h4 class="panel-title">
								            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Interpretation
								            </a>
								        </h4>
								    </div>
								    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								        <div class="panel-body">
							            	<ul>
												<p><strong>Dreams are a universal human experience</strong> that can be described as a state of consciousness characterized by sensory, cognitive and emotional occurrences during sleep. The dreamer has reduced control over the content, visual images and activation of the memory. There is no cognitive state that has been as extensively studied and yet as frequently misunderstood as dreaming. These elements create a novel "reality" out of seemingly nothing, producing an experience with a lifelike timeframe and connections.</p>
											</ul>	
								        </div>
								    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-10 animate-box" data-animate-effect="fadeInRight">
				<div class="col-12">
					<h4>Choose a letter below <br>to start finding the meaning</h4>
				</div>
				<?php require('dictionary.php'); ?>
			</div>
		</div>		
	</div>
</body>
<?php require('../views/footer.php'); ?>