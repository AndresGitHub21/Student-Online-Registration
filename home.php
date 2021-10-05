<?php
session_start();
if (!isset($_SESSION['studentID'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['studentID']);
  	header("location: login.php");
  }
?>
<html>
<header>
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</header>
<div>
<?php if (isset($_SESSION['success'])) : ?>

<div class="topnav">
<a class="active" href="home.php">Home</a>
<a href="profile.php">Profile</a>
<a href="courses_logic.php">Courses</a>
<a href="home.php?logout='1'">Log Out</a>



    
<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
</div>
<?php endif ?>
<?php  if (isset($_SESSION['studentID'])) {
 $message= "Login was successfull!" ; 
 echo "<script> alert('$message'); </script>";
} ?>

</html>
