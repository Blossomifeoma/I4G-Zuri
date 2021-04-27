 <?php

if (isset($_POST["submit"])){

    $fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $password= $_POST["password"];
    $confirmpassword= $_POST["confirmpassword"];


    require_once 'databasehandler.php';
    require_once 'functions.php';

   if  (emptyinputsignup($fullname, $username, $password, $confirmpassword) !== false) {
        header("location: signup.php?error=emptyinput");
        exit();
    }
    if (invalidusername($username) !== false) {
        header("location: signup.php?error=invalidusername");
        exit();
    }
    if (passwordmatch($password, $confirmpassword) !== false) {
        header("location: signup.php?error=passwordsdontmatch");
        exit();
    }
    if (usernameexists($conn, $username) !== false) {
        header("location: signup.php?error=usernamenotavailable");
        exit();
    }

    createuser($conn, $fullname, $username, $password);
}

else{
    header("location: login.php");
 } 
   
?>       
