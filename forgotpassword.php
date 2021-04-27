<!DOCTYPE html>
<html>
<body> 
  <section class="forgot password form">
  <?php

if (isset($_GET["error"])){
  if($_GET['error'] == "emptyinput"){
 echo "<p>Some fields not field!</p>";
  }
  else if($_GET["error"] == "passwordsdontmatch"){
    echo "<p>Passwords doesn't match!</p>";
  }
  else if ($_GET["error"] == "userdoesnotexist"){
    echo "<p>Username does not exist!</p>";
  }
    else if ($_GET["error"] == "stmtfailed"){
      echo "<p>Something went wrong!</p>";
  }
  else if ($_GET["error"] == "none"){
    echo "<p>Password successfully updated!</p>";
  }
}
 ?>
    <h4>forgot password</h4>
     <div class= "forgotpassword-form-form">
      <form action="process_forgotpassword.php" method="post">
      <?php
          if(isset($_GET["message"]) && !empty($_GET["message"])){
            echo $_GET["message"];
          }
       ?>
       <p></p>
          <input type="text" name= "username" placeholder= "Username"><br></br>
          <input type="password" name="newpassword" placeholder="New Password"><br></br>
          <input type="password" name="confirmpassword" placeholder="Confirm Password"><br></br>
          <button type="submit" name= "submit"><strong>SUBMIT</strong></button>
        <p><a href="login.php">Login</a></p>
       </form>
     </div>
</body>
</html>





