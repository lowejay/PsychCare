<?php include('process.php'); ?>
<?php require('header.php');?>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
 <form id="register_form">
      <h1>Register</h1>
      <div id="error_msg"></div>
    <div>
    <input type="text" name="idnumber" placeholder="Username" id="idnumber" >
      <span></span>
    </div>
    <div>
      <input type="email" name="email" placeholder="Email" id="email">
    <span></span>
    </div>
    <div>
     <input type="password" name="password" placeholder="Password" id="password">
    </div>
    <div>
    <button type="button" name="register" id="reg_btn">Register</button>
    </div>
  </form>
</body>
</html>
<!-- scripts -->
<script src="vendor/jquery-3.2.1.min.js"></script>
<script src="scriptz.js"></script>