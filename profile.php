<?php
if(!isset($_SESSION['loggedin'])){
    // redirect to Log In page

    header("location: login.php");
}
 ?>

<!DOCTYPE html>
<html>
<head>
    <h1>CHATFREAK.COM</h1 >
</head>
<body>
     <p>Welcome to your profile!</p>
</body>
    <nav>
        <p> <li><a href="logout.php">Log Out</a></li></p>
    </nav>

</html>