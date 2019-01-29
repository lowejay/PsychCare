<?php require('../controllers/session_controller.php'); 
if(!$_SESSION['student_ID']){header('Location: ../index.php');}?>
<?php include('../views/header.php') ?>
<?php include('../views/category_sidebar.php'); ?>
<?php include('../controllers/dream_controller.php'); ?>

<?php $result = loadDream();?>
<body>

	<!-- BODY -->
		<div id="colorlib-main">
			<div class="colorlib-work">
				<div class="container-fluid">

		<!--DICTIONARY-->
			<div class="col-md-9 animate-box" data-animate-effect="fadeInRight">
				<p align="right" style="margin-bottom: 5">
					<font face="Arial" size="4">
					<a href="category_dreams.php">Dictionary:</a>
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
					<br><br><br>
				</p>
			</div>	
		<!--END OF DICTIONARY-->

					<div class="row">
						<div class="col-md-6 col-md-offset-5 col-md-pull-3">
							<h4 class="animate-box">Interpretation of Dreams</h4>
							<h1 class="animate-box" data-animate-effect="fadeInLeft">A</h1>
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
		                    		<?php foreach($result as $row)  {?>
		                    			<tr style="font-size: 20px">
		                    				<td scope="col-md-10"><b><font color="#e85f58"><?php echo $row['dream_name'] ?></td></b></font>
		                    				<td scope="col-md-10 "><?php echo $row['dream_meaning'] ?></td>
		                    			</tr>	
		                    		<?php } ?>
		                    	</tbody>
		                    </table>
                        	<div class="row">
								<div class="col-md-12 text-center animate-box" data-animate-effect="fadeInLeft"">
									<ul class="pagination">
										<li class="inabled"><a href="a.php">&laquo;</a></li>
										<li class="active"><a href="a.php">1</a></li>
										<li><a href="a2.php">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">&raquo;</a></li>
									</ul>
								</div>
							</div>
		                </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--END BODY-->

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

	</body>
</html>
<?php include('../views/footer.php') ?>

