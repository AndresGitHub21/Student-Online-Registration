<?php
session_start();
include('enroll.php');
?>

<!DOCTYPE html>
<html>
<header>
    <title>Profile Page</title>
    <link rel="stylesheet" type="text/css" href="courses.css">
</header>

<div>
<h3><b> Welcome to Course page </b></h3>
</div>

<?php 
$query= "SELECT * FROM courses";
$results = mysqli_query ($conn, $query);
?>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>courseName</th>
            <th>enrollments</th>
            <th>maxEnrollments</th>
            <th>Semester</th>
            <th colspan="2">Action</th>

        
        </tr>
    </thead>      
    <?php while ($row = mysqli_fetch_array($results)) { 
        $_SESSION['courseName'] = $row['courseName'];
        ?>
        <tr>
            <td><?php echo $row['Id']; ?></td>
            <td><?php echo $row['courseName']; ?></td>
            <td><?php echo $row['enrollments']; ?></td>
            <td><?php echo $row['maxEnrollments']; ?></td>
            <td><?php echo $row['Semester']; ?></td>
            <td><a href="enroll.php?enroll=<?php $_SESSION['courseName']; ?>" class="enroll_btn" >Enroll</a></td>
        </tr>
    <?php } ?>
    </table>
<div class="text-center">Return back to the Home page <a href="home.php"> Home page </a> </div> 
    <form method = "post" action = "courses_logic.php"> 
        Courses:<select name="choice" ><option disabled selected>--Select Course--</option>
<?php 

    $sql = "SELECT courseName FROM courses";
    $result = mysqli_query($conn, $sql);
while($data=mysqli_fetch_array($result)){
    echo "<option value=".$data['courseName'].">".$data['courseName']."</option>";
   
}
?>

    <button type="submit" name="enroll" class="btn">Enroll</button>
   
    </form>