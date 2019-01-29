<?php require('../controllers/session_controller.php'); 
if(!$_SESSION['student_ID']){header('Location: ../index.php');}?>
<?php include('../views/header.php') ?>
<?php include('../views/category_sidebar.php') ?>

<?php require('../controllers/dream_controller.php');
$dreamList = dreamList();?>
	<div id="colorlib-main">
			<div class="colorlib-work">
				<div class="container-fluid">
				<?php require('dictionary.php') ?>
						<div class="row">
							<div class="col-md-6 col-md-offset-5 col-md-pull-3">
								<h4 class="animate-box">Interpretation of Dreams</h4>
								<h1 class="animate-box" data-animate-effect="fadeInLeft"></h1>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-md-offset-6 col-md-pull-3">
								<input class="text animate-box" data-animate-effect="fadeInRight" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
									<table class="table-hover animate-box" id="myTable">
									<thead>
						                <tr style="font-size: 20px">
						                    <th style="padding-right: 30px">Name</th>
						                    <th style="padding-right: 40px">Meaning</th>
						            	</tr>
						        	</thead>
						        	<tbody>
						        		<?php while ($row=mysqli_fetch_array($dreamList)) {?>
					        			<tr style="font-size: 20px">
					        				<td scope="col-md-10"><b><font color="#e85f58"><?php echo $row['dream_name'] ?></td></b></font>
					        				<td scope="col-md-10 "><?php echo $row['dream_meaning'] ?></td>
					        			</tr>	
					        		<?php } ?>
						        	</tbody>
						        </table>
						    </div>
						</div>
				</div>
			</div>
	</div>
	
	<!--TABLE FILTER FUNCTION-->
	<script>
	function myFunction() {
	  // Declare variables 
	  var input, filter, table, tr, th, td;
	  input = document.getElementById("myInput");
	  filter = input.value.toUpperCase();
	  table = document.getElementById("myTable");
	  tr = table.getElementsByTagName("tr");

	  // Loop through all table rows, and hide those who don't match the search query
	  for (i = 1; i < tr.length; i++) {
	    td = tr[i].getElementsByTagName("td")[1];
	    if (td) {
	      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
	        tr[i].style.display = "";
	      } else {
	        tr[i].style.display = "none";
	      }
	    } 
	  }
	}
	</script>
	<!-- END TABLE FILTER FUNCTION-->

<?php require('../views/footer.php') ?>
<!--END BODY-->