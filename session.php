<?php

 include('connection.php');
 session_start();

 $check_user_student = $_SESSION["student ID"];
 $query = mysqli_query($conn, "SELECT student ID, password FROM tbluser WHERE student ID='$check_user_student'");
 $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
 $loggedin_User_student = $row['student ID'];
 $loggedin_User_password = $row['password'];

 if(!isset($loggedin_User_email) || $loggedin_User_password==NULL){
     echo "Go back";
     header("Location: login.php");
 }
?>