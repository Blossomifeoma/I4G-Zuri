<!DOCTYPE html>
<html>
<body> 
  <section class="log in form">
    <h2><strong> Welcome!!!</strong></h2>
     <div class= "login-form-form">
      <form action="process_login.php" method="post">
       <?php
          if(isset($_GET["message"]) && !empty($_GET["message"])){
            echo $_GET["message"];
          }
       ?>
       <p></p>
          <input type="text" name="user_name" placeholder="username"><br></br>
          <input type="password" name="pass_word" placeholder="password"><br></br>
          <button type="submit" name= "submit">Log in</button>
       </form>
     </div>
        <nav>
        <p> <li><a href="forgotpassword.php">Forgot Password</a></li></p>
          </nav>



    </form>
     </body>
     </html>
