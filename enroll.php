  <?php
session_start();
include('connection.php');
?>
<?php  
if(isset($_SESSION['studentID'])){
    $userId = $_SESSION['studentID']; 
if (isset($_POST['enroll'])) {
    $courseName =  $_POST['choice'];
    
        $update_query = "UPDATE tbluser set coursesEnrolled = '$courseName' WHERE Id = $userId";
        $results = mysqli_query ($conn, $update_query);
    if($results){
        header("Location: courses_logic.php");
    }
    
    ?>
    <?php } ?>
        <?php } ?>