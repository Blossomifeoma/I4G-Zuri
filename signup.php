<?php
   session_start();

?>
<!DOCTYPE html>
<html>
<body> 
<body> 
  <section class="registration password form">
  <?php
  if (isset($_GET["error"])){
     if($_GET['error'] == "emptyinput"){
    echo "<p>Some fields not field!</p>";
     }
  else if ($_GET["error"] == "invalidusername"){
    echo "<p>Invalid username!</p>";
  }
  else if($_GET["error"] == "passwordsdontmatch"){
    echo "<p>Passwords doesn't match!</p>";
  }
  else if ($_GET["error"] == "stmtfailed"){
    echo "<p>Something went wrong!</p>";
  }
  else if ($_GET["error"] == "usernamenotavailable"){
    echo "<p>Username in use already!</p>";
  }
  else if ($_GET["error"] == "none"){
    echo "<p>Registration successful!</p>";
}
}
?>
    <h4>Registration</h4>
     <div class= "signup-form-form">
      <form action="process_signup.php" method="post">
       <p></p>
       <input type="text" name= "fullname" placeholder= "Full name"><br></br>
          <input type="text" name= "username" placeholder= "Username"><br></br>
          <input type="password" name="password" placeholder="Password"><br></br>
          <input type="password" name="confirmpassword" placeholder="Confirm Password"><br></br>
          <button type="submit" name= "submit"><strong>SUBMIT</strong></button>
          <p>Already have an account?<br><p><a href="login.php">Login</a></p></p>
       </form>
     </div>
</section>
</body>
</html>


