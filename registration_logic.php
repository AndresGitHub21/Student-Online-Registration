<?php
session_start();
//Registration logic

$studentID = '';
$firstName = '';
$lastName = '';
$email = '';
$phone = '';
$password = '';
$errors = array();

include('connection.php');


if(isset($_POST['register'])){
    $studentID = mysqli_real_escape_string($conn, $_POST['studentID']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);

    if(empty($studentID)){array_push($errors,"Username is required");}
    if(empty($firstName)){array_push($errors,"First name is required");}
    if(empty($lastName)){array_push($errors,"Last name is required");}
    if(empty($email)){array_push($errors,"Email is required");}
    if(empty($phone)){array_push($errors,"Phone number is required");}
    if(empty($password)){array_push($errors,"Password is required");}
    //$password = MD5($password)

    $check_user = "SELECT * FROM tbluser WHERE studentID = '$studentID'";
    $result = mysqli_query($conn, $check_user); 
    $user = mysqli_fetch_assoc($result);

    if($user){
        if($user['studentID']===$studentID){
            array_push($errors, "User already exists");
        }
    }
    if(count($errors)==0){
        $sql = "INSERT INTO tbluser(studentID, password, firstName, lastName, email, phone)
                VALUES('$studentID', '$password', '$firstName', '$lastName', '$email', '$phone')";
        mysqli_query($conn, $sql);
        $_SESSION['studentID']=$studentID;
        $_SESSION['success']= "Welcome, you are now logged in";
        header("Location: login.php");
    }
}
if(isset($_POST['login'])){
    $studentID=mysqli_real_escape_string($conn,$_POST['studentID']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);

if(empty($studentID)){array_push($errors, "Student ID required");}
if(empty($password)){array_push($errors, "Password required");}

if(count($errors)==0){
    $sql = "SELECT * FROM tbluser WHERE studentID = '$studentID' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)==1){
    $_SESSION['studentID']=$studentID;
    $_SESSION['success']="Welcome, you are logged in";
    header("Location: home.php");
}
else{
    array_push($errors, "Invalid credentials");
}
}
}
?>