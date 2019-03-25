<?php

$host="localhost";
$user="root";
$password="";
$db="demo";

$conn = new mysqli($host, $user, $password, $db);
$query = "INSERT INTO user_validation(u_mail, username, password) 
          VALUES('$email', '$username', '$password')"; // user_validation can be any table name and the u_mail, username, password should be column names in the table
// $result = mysqli_query($conn, $query)
?>
<!DOCTYPE html>
<html>
<head>
    <title>LogIn</title>
    <link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
<form method="post" action="check.php">

            <label for="Username">Name:</label>
            <input type="text" name="name">

            <label for="password">Password</label>
            <input type="password" name="pass">

            <button type="submit" value="LogIn" name="submit">
        </form>
</body>

</html>