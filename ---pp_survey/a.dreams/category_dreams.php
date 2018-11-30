<?php require('../controllers/session_controller.php'); 
if(!$_SESSION['student_ID']){header('Location: ../index.php');}?>
<?php include('../views/header.php') ?>
<?php include('../views/category_sidebar.php') ?>

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
<!--END HEADER-->

<!--DICTIONARY-->
		<div class="col-md-10 animate-box" data-animate-effect="fadeInRight">
			<p align="right" style="margin-bottom: 5">
				<form method="post" action="dreams.php">
					<font face="Arial" size="4">
						<a href="dreams.php?letter=a" name="letter" value="a">A</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="dreams.php?letter=b" name="letter" value="b">B</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="dreams.php?letter=c" name="letter" value="c">C</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="dreams.php?letter=d" name="letter" value="d">D</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="dreams.php?letter=e" name="letter" value="e">E</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="dreams.php?letter=f" name="letter" value="f">F</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="dreams.php?letter=g" name="letter" value="g">G</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="dreams.php?letter=h" name="letter" value="h">H</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="dreams.php?letter=i" name="letter" value="i">I</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="dreams.php?letter=j" name="letter" value="j">J</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="dreams.php?letter=k" name="letter" value="k">K</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="dreams.php?letter=l" name="letter" value="l">L</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="dreams.php?letter=m" name="letter" value="m">M</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="dreams.php?letter=n" name="letter" value="n">N</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="dreams.php?letter=o" name="letter" value="o">O</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="dreams.php?letter=p" name="letter" value="p">P</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="dreams.php?letter=q" name="letter" value="q">Q</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="dreams.php?letter=r" name="letter" value="r">R</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="dreams.php?letter=s" name="letter" value="s">S</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="dreams.php?letter=t" name="letter" value="t">T</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="dreams.php?letter=u" name="letter" value="u">U</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="dreams.php?letter=v" name="letter" value="v">V</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="dreams.php?letter=w" name="letter" value="w">W</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="dreams.php?letter=x" name="letter" value="x">X</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="dreams.php?letter=y" name="letter" value="y">Y</a>&nbsp;
					</font>
					<font face="Arial" size="4">
						<a href="dreams.php?letter=z" name="letter" value="z">Z</a>&nbsp;
					</font>
				</form>
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
<!--END OF INTRODUCTION-->
</body>
<?php include('../views/footer.php') ?>