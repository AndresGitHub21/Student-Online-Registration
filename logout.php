<?php
session_start();
unset($_SESSION["student ID"]);
unset($_SESSION["password"]);
header("Location:login.php");
?>