<?php
 session_start();
 ?>
 <?php
    $errorcount = 0;

  // data verification
    $firstname = $_POST["first_name"] != "" ? $_POST["first_name"] : $errorcount++;
    $lastname = $_POST["last_name"] != "" ? $_POST["last_name"] : $errorcount++;
    $username = $_POST["user_name"] != "" ? $_POST["user_name"] : $errorcount++; 
    $password = $_POST["pass_word"] != "" ? $_POST["pass_word"] :  $errorcount++;

    $firstname = $_POST["first_name"];
    $lastname = $_POST["last_name"]; 
    $username = $_POST["user_name"]; 
    $password = $_POST["pass_word"];
    if($errorcount > 0){

        // informs users there's been an error
    
        header("location: signup.php?message=oops,something went wrong!");

    }else{
        // count all users
        $allusers = scandir("data/");
        $countallusers = count($allusers);
    
        $userobject = [
           'first_name'=>$firstname,
           'last_name'=>$lastname,
           'user_name'=>$username,
           'pass_word'=>$password
        ];

        // check if user already exists
        for ($counter = 0; $counter < $countallusers; $counter++){
           $currentuser = $allusers[$counter];
           
           if($currentuser == $username . ".json"){
               echo "Registration failed, user exists!";
               include "login.php";
               die();
           }
          }

        // save to data file

        file_put_contents("data/" . $username . ".json" , json_encode($userobject));
        echo "$firstname, you have registered successfully! Log in below";
        include "login.php";
    }


?>