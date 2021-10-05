//For database connection
<?php

$conn = mysqli_connect("127.0.0.1:3307", "root", "", "employee_portal");

if(!$conn)
{
    echo "Failed connecting to the database!!!";
}

?>