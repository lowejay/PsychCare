<?php
    session_start();
    include('db_connect.php');

    $query="SELECT * FROM orders ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($sql, $query);

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from technext.github.io/classimax/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Feb 2018 14:05:30 GMT -->
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  	<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
	<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
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

<!--================================
=            Page Title            =
=================================-->
<section class="page-title">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2 text-center">
				<!-- Title text -->
				<h3><i class="fa fa-money" aria-hidden="true"></i> Bill</h3>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>
<!--==================================
=            Blog Section            =
===================================-->

<section class="blog section">
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1 col-lg-12 offset-lg-0">
				<div class="sidebar">
					<!-- Category Widget -->
					<div class="widget category">
						<!-- Widget Header -->
						<h5 class="widget-header">Customer Bill Details</h5>
							<form method="POST" action="cancel_order.php">
								<div class="row">
								<?php while ($row=mysqli_fetch_array($result)) {?>
									<div class="col-sm-12 col-md-12 widget-header">
										<div class="form-group mb-30">
										    <b><label class="text-info">Reciept Number</label></b>
										    <p><?php echo $row['id'] ?></p>
										    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
										</div>
									</div>
									<div class="col-sm-12 col-md-6 widget-header">
										<div class="form-group mb-30">
										    <b><label class="text-info">Date Today</label></b>
											<p><?php echo $row['date_today'] ?></p>
										</div>
									</div>
									<div class="col-sm-12 col-md-6 widget-header">
										<div class="form-group mb-30">
										    <b><label class="text-info">Pick Up Date</label></b>
											<p><?php echo $row['pick_up_date'] ?></p>
										</div>
									</div>
									<div class="col-sm-12 col-md-6 widget-header">
										<div class="form-group mb-30">
										    <b><label class="text-info">First Name</label></b>
											<p><?php echo $row['fname'] ?></p>
										</div>
									</div>
									<div class="col-sm-12 col-md-6 widget-header">
										<div class="form-group mb-30">
										    <b><label class="text-info">Last Name</label></b>
											<p><?php echo $row['lname'] ?></p>
										</div>
									</div>
									<div class="col-sm-12 col-md-12 widget-header">
										<div class="form-group mb-30">
										    <b><label class="text-info">Contact Number</label></b>
											<p><?php echo $row['contact_no'] ?></p>
										</div>
									</div>
									<div class="col-sm-12 col-md-12 widget-header">
										<div class="form-group mb-30">
										    <b><label class="text-info" style="font-size: 30px">TOTAL PAYMENT</label></b>
											<b><p style="font-size: 25px">PHP <?php echo number_format($row['total_payment'], 2) ?></p></b>
										</div>
									</div>
								<?php } ?>
								<div class="col-sm-12 col-md-6">
									<div class="form-group mb-30">
									    <input type="submit" name="submit" class="btn btn-danger col-md-12" value="Cancel">
									</div>
								</div>
							</form>
							<div class="col-sm-12 col-md-6">
								<form action="orders.php">
									<div class="col-sm-12 col-md-12">
										<div class="form-group mb-30">
											<button class="btn btn-success col-md-12" type="submit">Confirm</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
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
</body>


<!-- Mirrored from technext.github.io/classimax/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Feb 2018 14:05:38 GMT -->
</html>
