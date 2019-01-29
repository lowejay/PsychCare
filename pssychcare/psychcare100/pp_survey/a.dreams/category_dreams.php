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
	<!--END HEADER-->

	<!--DICTIONARY-->
			<div class="col-md-10 animate-box" data-animate-effect="fadeInRight">
				<p align="right" style="margin-bottom: 5">
					<font face="Arial" size="4">
					<a href="category_dream.php">Dictionary:</a>
					&nbsp;&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="dream_a.php">A</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="b.php">B</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="c.php">C</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="d.php">D</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="e.php">E</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="f.php">F</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="g.php">G</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="h.php">H</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="i.php">I</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="j.php">J</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="k.php">K</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="l.php">L</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="m.php">M</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="n.php">N</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="o.php">O</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="p.php">P</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="q.php">Q</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="r.php">R</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="s.php">S</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="t.php">T</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="u.php">U</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="v.php">V</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="w.php">W</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="x.php">X</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="y.php">Y</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="z.php">Z</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="number.php">#</a>&nbsp;
					</font>
				</p>
			</div>	
	<!--END OF DICTIONARY-->

	<!--INTRODUCTION-->
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
			</div>
		</div>
	</div>
	<!--END OF INTRODUCTION-->

</body>
</html>
<?php include('../views/footer.php') ?>

