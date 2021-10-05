<?php
session_start();
include('connection.php');
?>

<!DOCTYPE html>
<html>
<header>
    <title>Profile Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</header>

<div>
<h3><b> Welcome to Profile page </b></h3>
</div>

<div class="container">
        
    <?php  if (isset($_SESSION['studentID'])) {
    $sql = "SELECT * FROM tblUser where studentID = '".$_SESSION['studentID']."'";
    $result = mysqli_query($conn, $sql);
    ?>
    
    <?php
    while($rows=mysqli_fetch_array($result, MYSQLI_ASSOC)){
    ?>
    
    <div id="reg-head" class="headrg"> Profile Card</div>
    <table border="0" align="center" cellpadding="2" cellspacing="0">
    <tr id="lg-1">
    <td class="tl-1"><div align="left" id="col-name">Student ID:</div></td>
    <td class="tl-4"><?php echo $rows['studentID']; ?></td>
    </tr>

    <tr id="lg-1">
    <td class="tl-1"><div align="left" id="col-name">First Name:</div></td>
    <td class="tl-4"><?php echo $rows['firstName']; ?></td>
    </tr>

    <tr id="lg-1">
    <td class="tl-1"><div align="left" id="col-name">Last Name:</div></td>
    <td class="tl-4"><?php echo $rows['lastName']; ?></td>
    </tr>

    <tr id="lg-1">
    <td class="tl-1"><div align="left" id="col-name">Email:</div></td>
    <td class="tl-4"><?php echo $rows['email']; ?></td>
    </tr>

    <tr id="lg-1">
    <td class="tl-1"><div align="left" id="col-name">Phone:</div></td>
    <td class="tl-4"><?php echo $rows['phone']; ?></td>
    </tr>

    <tr id="lg-1">
    <td class="tl-1"><div align="left" id="col-name">Course Enrolled</div></td>
    <td class="tl-4"><?php echo $rows['coursesEnrolled']; ?></td>
    </tr>

    </table>
    </div>
    <?php
    //closing the while loop
    }
    ?>
    <?php
    //closing the while loop
    }
    ?>

</div>
<br>
<div class="text-center">Return back to the Home page <a href="home.php"> Home page </a> </div> 
