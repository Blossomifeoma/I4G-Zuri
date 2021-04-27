<?php
if (isset($_POST["submit"])){

$username = $_POST["username"]; 
$password = $_POST["newpassword"];
$confirmpassword = $_POST["confirmpassword"];

require_once 'databasehandler.php';
require_once 'functions.php';

if  (emptyinputforgotpassword($username, $password, $confirmpassword) !== false){
  header("location: forgotpassword.php?error=emptyinput");
  exit();
}

if (passwordmatch($password, $confirmpassword) !== false) {
  header("location: forgotpassword.php?error=passwordsdontmatch");
  exit();
}

update_password($username, $password);
}
else {
  header("location: forgotpassword.php");
}
?>