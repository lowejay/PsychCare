<?php
	include "controllers/db_connect.php";  	
?>
 <?php  
 //entry.php  
 
 
 
 ?> 

<html>
<head>
  <title>Search</title>
<link rel="stylesheet" type="text/css" href="css/search_style.css">
<link rel="icon" type="image/png" href="images/icons/earth.png"/>
<link href="https://fonts.googleapis.com/css?family=Mukta+Vaani" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

  
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</head>

<body>



<div class="container-search">


<h2>ERM Sample Search</h2>
<p>Search for account office, exposure, or asset:</p>  
<input id="myInput" type="text" placeholder="Search..">
<br><br>

<?php
	$conn = myConnect();
	$sql = "SELECT * FROM data_student";

	if ($result = mysqli_query($conn, $sql)) {
   		
   		
        	echo "<table id='search'><col width='20%'><col width='20%'><col width='20%'><col width='20%'> 
 				 	<thead>
    					<tr>
      						<th>Officer Name</th>
      						<th>Exposure</th>
      						<th>Asset</th>
						  </tr>
						  </thead>
						  <tbody id='myTable'>";

						  
						  while ($row = $result->fetch_assoc()) {
						  	echo"
						    <tr>
						      <td>".$row['student_ID']."</td>
						      <td>".$row['student_FN']."</td>
						      <td>".$row['student_LN']."</td>
						      ";
						  }					      
						  
						  	echo "

						      	
						    </tr>";
	
  		//  }
						   echo"</tbody></table>";	
  		
  	}
?>
<div class="pagination-container">
  <nav>
    <ul class="pagination"></ul>
  </nav>
</div>

</div>
</body>

</html>