<?php
    session_start();
    include('db_connect.php');

    $query="SELECT * FROM items";
    $result = mysqli_query($sql, $query);

    $query2="SELECT * FROM items";
    $result2 = mysqli_query($sql, $query2);

    $query="SELECT * FROM items";
    $result = mysqli_query($sql, $query);

    $id = $_GET['id'];
    $customer_query="SELECT * FROM customers WHERE id='$id'";
    $customer_result = mysqli_query($sql, $customer_query);
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
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>  
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>     
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
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
				<h3><i class="fa fa-dashboard" aria-hidden="true"></i> Dashboard</h3>
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
			<div class="col-md-10 offset-md-1 col-lg-5 offset-lg-0">
				<div class="sidebar">
					<!-- Category Widget -->
					<div class="widget category">
						<!-- Widget Header -->
						<h5 class="widget-header"><i class="fa fa-info-circle"></i> Laundry Items Information</h5>
						<table class="table table-striped table-hover" id="items">
							<thead>
		                        <tr style="font-size: 15px">
			                        <th>Item</th>
			                        <th>Price/Kilo</th>
		                    	</tr>
	                    	</thead>
                        	<tbody>
		                    	<?php while ($row=mysqli_fetch_array($result)) {?>
			                    	<tr style='font-size:14px'>
		                        		<td><?php echo $row['item_name'] ?></td>
		                        		<td><?php echo number_format($row['price_kilo'], 2) ?></td>
		                        	</tr>
		                    	<?php } ?>
		                    </tbody>
                        </table>
					</div>
				</div>
			</div>
			<div class="col-md-10 offset-md-1 col-lg-7 offset-lg-0">
				<div class="sidebar">
					<!-- Category Widget -->
					<div class="widget category">
						<!-- Widget Header -->
						<h5 class="widget-header"><i class="fa fa-user"></i> Customer Details</h5>
						<form method="post" action="insert_order.php">
							<div class="row">
								<div class="col-sm-12 col-md-6">
									<div class="form-group mb-30">
									    <label>Date Today</label>
										<input type="date" class="form-control" name="date_today" min="<?php echo date('Y-m-d'); ?>" required>
									</div>
								</div>
								<div class="col-sm-12 col-md-6">
									<div class="form-group mb-30">
									    <label>Pick Up Date</label>
										<input type="date" class="form-control" style="float:right;" min="<?php echo date('Y-m-d'); ?>" name="pick_up_date" required>
									</div>
								</div>
								<?php while ($row=mysqli_fetch_array($customer_result)) {?>
									<div class="col-sm-12 col-md-6">
										<div class="form-group mb-30">
										    <label>First Name</label>
											<input type="text" class="form-control" name="fname" value="<?php echo $row['fname']?>" readonly>
										</div>
									</div>
									<div class="col-sm-12 col-md-6">
										<div class="form-group mb-30">
										    <label>Last Name</label>
											<input type="text" class="form-control" name="lname" value="<?php echo $row['lname']?>" readonly>
										</div>
									</div>
									<div class="col-sm-12 col-md-12">
										<div class="form-group mb-30">
										    <label>Contact Number</label>
											<input type="text" class="form-control" name="contact_no" value="<?php echo $row['contact_num']?>" readonly>
										</div>
									</div>
								<?php } ?>
								<?php while ($row=mysqli_fetch_array($result2)) {?>
									<div class="col-sm-12 col-md-4">
										<div class="form-group mb-30">
										    <label style="font-weight: bold"><?php echo $row['item_name']?></label><br>
										    <input type="hidden" class="form-control" name="item_name[]" value="<?php echo $row['item_name']?>" required>
										    <input type="hidden" class="form-control" name="price_kilo[]" value="<?php echo $row['price_kilo']?>" required>
										    <label>Kilo: </label><br>
											<input type="text" class="form-control" name="kilo[]" value="0" required>
											<label>Quantity: </label><br>
											<input type="text" class="form-control" name="quantity[]" value="0" required>
										</div>
									</div>
								<?php } ?>
								<div class="col-sm-12 col-md-12">
									<div class="form-group mb-30">
									    <input type="submit" name="submit" class="btn btn-success col-md-12" value="Submit">
									</div>
								</div>
							</div>
						</form>
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
	<script>
		$(document).ready(function(){
		    $('#items').DataTable();
		});
	</script>

</body>


<!-- Mirrored from technext.github.io/classimax/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Feb 2018 14:05:38 GMT -->
</html>
