<?php
session_start();
if(isset($_POST['confirm']))
{
    extract($_POST);
    //connection to the database
    include 'connection.php';

    $sql = mysqli_query($conn, "SELECT * FROM tbluser WHERE student ID = '$studentID' AND password = '$password'");

    $row = mysqli_fetch_array($sql);

    if(is_array($row))
    {
        $_SESSION["student ID"] = $row['student ID'];
        $_SESSION["password"] = $row['password'];

        header("Location: home.php"); 
    }
    else
    {
        echo "Invalid Student ID or password!!";
    }
}
?>