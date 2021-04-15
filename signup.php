<!DOCTYPE html>
<html>
<body>
  <section class="sign up form">
    <h2>Sign up</h2>
     <div class= "signup-form-form">
      <form action="process_signup.php" method="post">
      <?php
      if(isset($_GET["message"]) && !empty($_GET["message"])){
        echo $_GET["message"];
      }
      ?>
      <p></p>
          <input type="text" name="first_name" placeholder="Firstname"/><br></br>
          <input type="text" name="last_name" placeholder="Lastname"/><br></br> 
          <input type="text" name="user_name" placeholder="username"/><br></br>
          <input type="password" name="pass_word" placeholder="password"/><br></br>
          <button type="submit" name= "submit">Sign up</button>
       </form>
     </div>

     </form>
     </body>
     </html>
