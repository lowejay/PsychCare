<?php require('../controllers/session_controller.php');if(!$_SESSION['student_ID']){header('Location: ../index.php');}
require('../controllers/dream_controller.php');
require('../views/header.php');require('../views/category_sidebar.php');
$dreamList = dreamList();?>
<body>
	<div id="colorlib-main">
		<div class="colorlib-work">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8 col-md-offset-3 col-md-pull-3">
						<h1 class="animate-box" data-animate-effect="fadeInLeft">Interpretation of Dreams</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-3 col-md-pull-2">
						<div align="center" class="animate-box" data-animate-effect="fadeInRight">
							<?php require('dictionary.php'); ?>
						</div>
						<input class="text animate-box" data-animate-effect="fadeInRight" id="myInput" onkeyup="searchDream()" placeholder="Search for names or keyword based on what you have dreamt..">
							<table class="table-hover animate-box" id="myTable">
							<thead>
				                <tr style="font-size: 20px">
				                    <th style="padding-right: 30px">Name</th>
				                    <th style="padding-right: 40px">Meaning</th>
				            	</tr>
				        	</thead>
				        	<tbody>
				        		<?php while ($row=mysqli_fetch_array($dreamList)) {?>
			        			<tr style="font-size: 18px">
			        				<td>
			        					<b>
			        						<font color="#e85f58"><?php echo $row['dream_name'] ?></font>
			        					</b>
			        				</td>
			        				<td><?php echo $row['dream_meaning'] ?></td>
			        			</tr>	
			        		<?php } ?>
				        	</tbody>
				        </table>
				    </div>
				</div>
			</div>
		</div>
	</div>
</body>
<?php require('../views/footer.php'); ?>