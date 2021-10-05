<?php include('registration_logic.php') ?>

<!DOCTYPE html>
<html>
<header>
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</header>
<body>
        <form method="post" action="user_registration.php">
<?php include('errors.php'); ?>
            <div class="container">
            <h2>Registration</h2>
            <p>Please fill this form to create an account.</p>
            <hr>
                <label for="studentID"><b>Student ID</b></label>
                <input type="text" name="studentID" placeholder="Enter your Student ID.." required>

                <label for="firstname"><b>First Name</b></label>
                <input type="text" name="firstName" placeholder="Enter your first name.."  required>

                <label for="lastname"><b>Last Name</b></label>
                <input type="text" name="lastName" placeholder="Enter your last name.."  required>                

                <label for="email"><b>Email</b></label>
                <input type="email" name="email" placeholder="Enter your email.." required>

                <label for="phone"><b>Phone</b></label>
                <input type="text" name="phone" placeholder="Enter your phone number.."  required>

                <label for="password"><b>Password</b></label>
                <input type="password" name = "password" placeholder="Enter your password.."  required>
                       
               <hr>
         
                <button type="submit" name="register" class="btn">Register</button>
           
        </form>
        <br>
        <br>
        <div class="text-center">Already have an Account?<a href="login.php">Login</a>
        </div>
    </div>
</body>

</html>