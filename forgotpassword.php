<!DOCTYPE html>
<html>
<body> 
  <section class="forgot password form">
    <h4>forgot password</h4>
     <div class= "forgotpassword-form-form">
      <form action="process_forgotpassword.php" method="post">
      <?php
          if(isset($_GET["message"]) && !empty($_GET["message"])){
            echo $_GET["message"];
          }
       ?>
       <p></p>
          <input type="text" name= "user_name" placeholder= "Username"><br></br>
          <input type="password" name="new_password" placeholder="New Password"><br></br>
          <input type="password" name="confirm_password" placeholder="Confirm Password"><br></br>
          <button type="submit" name= "submit"><strong>SUBMIT</strong></button>
       </form>
     </div>
</body>
</html>
