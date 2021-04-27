<?php
   session_start();

?>

<!DOCTYPE html>
<body> 
  <section class="login password form">
  <?php
     if (isset($_GET["error"])){
      if($_GET["error"] == "emptyinput"){
        echo "<p>Some fields not field!</p>";
      }
      else if ($_GET["error"] == "wronglogin"){
        echo "<p>Invalid login details!</p>";
      }
    }
    ?>
    <h4>Login</h4>
     <div class= "login-form-form">
      <form action="process_login.php" method="post">
       <p></p>
          <input type="text" name= "username" placeholder= "Username"><br></br>
          <input type="password" name="password" placeholder="Password"><br></br>
          <button type="submit" name= "submit"><strong>SUBMIT</strong></button>
           <p>
           <li>Forgot password?  <a href= "forgotpassword.php">Click to reset</a></li>
           </p>
       </form>
     </div>
     </section>
</body>
</html>
