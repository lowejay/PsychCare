<?php
	session_start();
	require('db_connect.php');

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = "SELECT * FROM admin WHERE username = '".$username."' AND password = '".$password."'";
		$result =  mysqli_query($sql, $query);
		$check = mysqli_num_rows($result);
		$row = mysqli_fetch_row($result);

		if($check==1){
			$_SESSION['admin_user'] = $row['0'];
			header("Location: customers.php");
		}else{
			echo '<script type="text/javascript">alert("Invalid Username or Password")</script>';
		}
	}
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from technext.github.io/classimax/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Feb 2018 14:04:53 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WASH N DRY</title>
  
  <!-- PLUGINS CSS STYLE -->
  <link href="plugins/jquery-ui/jquery-ui.min.html" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Owl Carousel -->
  <link href="plugins/slick-carousel/slick/slick.css" rel="stylesheet">
  <link href="plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
  <!-- Fancy Box -->
  <link href="plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
  <link href="plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
  <link href="plugins/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="css/style.css" rel="stylesheet">

  <!-- FAVICON -->
  <link href="img/favicon.html" rel="shortcut icon">
  <link rel="icon" type="image/png" href="uploads/marker.png">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body class="body-wrapper">


<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg  navigation">
					<a class="navbar-brand" href="index.html">
						<img src="images/wndl.jpg" width="280" height="70" alt="WASH N' DRY">
					</a>
				</nav>
			</div>
		</div>
	</div>
</section>

<!--===============================
=            Hero Area            =
================================-->

<section class="hero-area bg-5 text-center overly">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Header Contetnt -->
				<div class="content-block">
					<h1>WASH 'N DRY</h1>
					<p>Cebu's best laundry shop</p>
					
				</div>

				<div class="advance-search">
					<form method="post">
						<div class="row">
							<div class="col-md-12">
								<h2 class="pull-left">LOG IN</h2>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="block d-flex"><br>
									<input type="text" name="username" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Username" required>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="block d-flex"><br>
									<input type="password" name="password" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Password" required>
									<input type="submit" name="submit" class="btn btn-main" value="Log In">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>

<!--===================================
=            Client Slider            =
====================================-->


<!--===========================================
=            Popular deals section            =
============================================-->
<section class="popular-deals section bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>SIGN UP</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- offer 01 -->
			<div class="col-sm-12 col-lg-12">
				<!-- product card -->
				<div class="product-item bg-light">
					<div class="card">
						<div class="card-body">
							<form method="post" action="sign_up.php" enctype="multipart/form-data">
								<div class="row">
									<div class="col-sm-12 col-md-6">
										<div class="form-group mb-30">
										    <label>First Name</label>
											<input type="text" class="form-control" name="fname" required>
										</div>
									</div>
									<div class="col-sm-12 col-md-6">
										<div class="form-group mb-30">
										    <label>Last Name</label>
											<input type="text" class="form-control" name="lname" required>
										</div>
									</div>
									<div class="col-sm-12 col-md-12">
										<div class="form-group mb-30">
										    <label>Username</label>
											<input type="text" class="form-control" name="username" required>
										</div>
									</div>
									<div class="col-sm-12 col-md-6">
										<div class="form-group mb-30">
										    <label>Password</label>
											<input type="password" class="form-control" name="password" required>
										</div>
									</div>
									<div class="col-sm-12 col-md-6">
										<div class="form-group mb-30">
										    <label>Confirm Password</label>
											<input type="password" class="form-control" name="confirm_password" required>
										</div>
									</div>
									<div class="col-sm-12 col-md-6">
										<div class="form-group mb-30">
											<label>Profile Picture</label><br>
											<input type="file" name="img" required>
										</div>
									</div>
									<div class="col-sm-12 col-md-12">
										<div class="form-group mb-30">
											<input type="submit" class="form-control btn btn-main" name="submit" value="Sign Up">
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class=" section">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- Section title -->
				<div class="section-title">
					<h2>ABOUT US</h2>
				</div>
				<div class="row">
					<div class="col-sm-12 col-lg-4">
						<div class="product-item bg-light">
							<div class="card">
								<div class="thumb-content">
									<!-- <div class="price">$200</div> -->
									<a href="#">
										<img class="card-img-top img-fluid" src="images/wndl.jpg" width="210" height="70" alt="Wash N' dry">
									</a>
								</div>
								<div class="card-body">
								    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
								    <div class="product-ratings">
								    	<ul class="list-inline">
								    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
								    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
								    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
								    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
								    		<li class="list-inline-item"><i class="fa fa-star"></i></li>
								    	</ul>
								    </div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-lg-4">
						<div class="product-item bg-light">
							<div class="card">
								<div class="thumb-content">
									<!-- <div class="price">$200</div> -->
									<a href="#">
										<img class="card-img-top img-fluid" src="images/wndl.jpg" width="210" height="70" alt="Wash N' dry">
									</a>
								</div>
								<div class="card-body">
								    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
								    <div class="product-ratings">
								    	<ul class="list-inline">
								    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
								    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
								    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
								    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
								    		<li class="list-inline-item"><i class="fa fa-star"></i></li>
								    	</ul>
								    </div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-lg-4">
						<div class="product-item bg-light">
							<div class="card">
								<div class="thumb-content">
									<!-- <div class="price">$200</div> -->
									<a href="#">
										<img class="card-img-top img-fluid" src="images/wndl.jpg" width="210" height="70" alt="Wash N' dry">
									</a>
								</div>
								<div class="card-body">
								    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
								    <div class="product-ratings">
								    	<ul class="list-inline">
								    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
								    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
								    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
								    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
								    		<li class="list-inline-item"><i class="fa fa-star"></i></li>
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
	<!-- Container End -->
</section>






<!--============================
=            Footer            =
=============================-->

<!-- Footer Bottom -->
<footer class="footer-bottom">
    <!-- Container Start -->
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-12">
          <!-- Copyright -->
          <div class="copyright">
            <p>Copyright © 2018. All Rights Reserved</p>
          </div>
        </div>
        <div class="col-sm-6 col-12">
          <!-- Social Icons -->
          <ul class="social-media-icons text-right">
              <li><a class="fa fa-facebook" href="#"></a></li>
              <li><a class="fa fa-twitter" href="#"></a></li>
              <li><a class="fa fa-pinterest-p" href="#"></a></li>
              <li><a class="fa fa-vimeo" href="#"></a></li>
            </ul>
        </div>
      </div>
    </div>
    <!-- Container End -->
</footer>

  <!-- JAVASCRIPTS -->
  <script src="plugins/jquery/jquery.min.html"></script>
  <script src="plugins/jquery-ui/jquery-ui.min-2.html"></script>
  <script src="plugins/tether/js/tether.min.js"></script>
  <script src="plugins/raty/jquery.raty-fa.js"></script>
  <script src="plugins/bootstrap/dist/js/popper.min.js"></script>
  <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="plugins/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js"></script>
  <script src="plugins/slick-carousel/slick/slick.min.js"></script>
  <script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
  <script src="plugins/fancybox/jquery.fancybox.pack.js"></script>
  <script src="plugins/smoothscroll/SmoothScroll.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
  <script src="js/scripts.js"></script>

</body>


<!-- Mirrored from technext.github.io/classimax/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Feb 2018 14:05:13 GMT -->
</html>



