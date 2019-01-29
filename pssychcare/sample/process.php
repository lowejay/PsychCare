<?php 
  $db = mysqli_connect('localhost', 'root', '', 'sample');


  if (isset($_POST['id_check'])) {
    $id = $_POST['idnumber'];
    $sql = "SELECT * FROM users WHERE name='$id'";
    $results = mysqli_query($db, $sql);
    if (mysqli_num_rows($results) > 0) {
      echo "taken"; 
    }else{
      echo 'not_taken';
    }
    exit();
  }
  if (isset($_POST['email_check'])) {
    $email = $_POST['email'];
    $sql = "SELECT * FROM users WHERE email='$email'";
    $results = mysqli_query($db, $sql);
    if (mysqli_num_rows($results) > 0) {
      echo "taken"; 
    }else{
      echo 'not_taken';
    }
    exit();
  }
  if (isset($_POST['save'])) {
    $username = $_POST['idnumber'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE name='$username'";
    $results = mysqli_query($db, $sql);
    if (mysqli_num_rows($results) > 0) {
      echo "exists";  
      exit();
    }else{
      $query = "INSERT INTO users (id,name, email, password) 
                VALUES ('$id','$name', '$email', '".md5($password)."')";
      $results = mysqli_query($db, $query);
      echo 'Saved!';
      exit();
    }
  }

?>