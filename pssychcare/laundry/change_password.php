<?php
    session_start();
    include('db_connect.php');


?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from technext.github.io/classimax/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Feb 2018 14:05:27 GMT -->
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
				<?php include('navbar.php') ?>
			</div>
		</div>
	</div>
</section>
<section class="page-title">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2 text-center">
				<!-- Title text -->
				<h3><i class="fa fa-user-circle-o" aria-hidden="true"></i> User Profile</h3>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>
<!--==================================
=            User Profile            =
===================================-->

<section class="user-profile section">
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1 col-lg-4 offset-lg-0">
				<div class="sidebar">
					<!-- User Widget -->
					<div class="widget user-dashboard-profile">
						<!-- User Image -->
						<div class="profile-thumb">
							<img src="<?php echo $userRow['4']; ?>" alt="" class="rounded-circle">
						</div>
						<!-- User Name -->
						<h5 class="text-center"><?php echo $userRow['1'].' '.$userRow['2']; ?></h5>
						<p>@<?php echo $userRow['3']; ?></p>
					</div>
					<!-- Dashboard Links -->
					<div class="widget user-dashboard-menu">
						<ul>
							<li>
								<a href="user_profile.php"><i class="fa fa-user"></i> Edit Profile</a>
							<li>
								<a href="change_password.php"><i class="fa fa-key"></i> Change Password</a>
							</li>
							<li>
								<a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
							</li>
							<li>
								<a href="delete_account.php"><i class="fa fa-power-off"></i>Delete Account</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
				<!-- Change Password -->
				<div class="widget change-password">
					<h3 class="widget-header user">Edit Password</h3>
					<form action="edit_password.php" method="POST">
						<!-- Current Password -->
						<div class="form-group">
						    <label for="current-password">Current Password</label>
						    <input type="password" class="form-control" name="current_password" required>
						</div>
						<!-- New Password -->
						<div class="form-group">
						    <label for="new-password">New Password</label>
						    <input type="password" class="form-control" name="new_password" required>
						</div>
						<!-- Confirm New Password -->
						<div class="form-group">
						    <label for="confirm-password">Confirm New Password</label>
						    <input type="password" class="form-control" name="confirm_password" required>
						</div>
						<!-- Submit Button -->
						<input type="submit" name="submit" value="Change Password" class="btn btn-transparent col-md-12">
					</form>
				</div>
			</div>
		</div>
	</div>
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
    <!-- To Top -->
    <div class="top-to">
      <a id="top" class="" href="#"><i class="fa fa-angle-up"></i></a>
    </div>
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


<!-- Mirrored from technext.github.io/classimax/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Feb 2018 14:05:30 GMT -->
</html>