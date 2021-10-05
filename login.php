<?php include('registration_logic.php') ?>

<!DOCTYPE html>
<html>
<header>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</header>
<body>
        <form method="post" action="login.php">
<?php include('errors.php'); ?>
            <div class="container">
            <h2>Login</h2>
            <p>Please login</p>
            <hr>
                <label for="studentID"><b>Student ID</b></label>
                <input type="text" name="studentID" placeholder="Enter your Student ID.." required>

                <label for="password"><b>Password</b></label>
                <input type="password" name = "password" placeholder="Enter your password.."  required>
                       
               <hr>
         
                <button type="submit" name="login" class="btn">Login</button>
           
        </form>
        <br>
        <br>
        <div class="text-center">Don't have an account?<a href="user_registration.php">Register</a>
        </div>
    </div>
</body>

</html>