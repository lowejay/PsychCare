<?php
    require("db_connect.php");

    if (isset($_SESSION['admin_user'])) {
        $userQuery = "SELECT * FROM admin WHERE id='".$_SESSION['admin_user']."'";
        $userResult = mysqli_query($sql, $userQuery);
        $userRow = mysqli_fetch_array($userResult);
    }else{
        header("location: index.php");
    }  
?>
<nav class="navbar navbar-expand-lg  navigation">
	<a class="navbar-brand" href="overview.php">
		<img src="images/wndl.jpg" width="270" height="70" alt="Wash N' dry">
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto main-nav ">
			<li class="nav-item">
				<a class="nav-link" href="overview.php">Overview</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="customers.php">Customers</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="items.php">Items</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="orders.php">Orders</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="history.php">History</a>
			</li>
		</ul>
		<ul class="navbar-nav ml-auto mt-10">
			<li class="nav-item dropdown dropdown-slide">
				<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<?php echo 'Hi, '.$userRow['1'].' '.$userRow['2'].' ! ';?><span></i></span>
				</a>
				<!-- Dropdown list -->
				<div class="dropdown-menu dropdown-menu-right">
					<a class="dropdown-item" href="user_profile.php"><i class="fa fa-user"></i> User Profile</a>
					<a class="dropdown-item" href="change_password.php"><i class="fa fa-key"></i> Change Password</a>
					<a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
				</div>
			</li>
		</ul>
	</div>
</nav>