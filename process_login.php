<?php

  session_start();

//session begins as a result of this
?>
<?php
    $errorcount = 0;

  // data verification
    $username = $_POST["user_name"] !="" ? $_POST["user_name"] : $errorcount++; 
    $password = $_POST["pass_word"] !="" ? $_POST["pass_word"] : $errorcount++;

    $username = $_POST["user_name"]; 
    $password = $_POST["pass_word"];
    if($errorcount > 0){

       // informs users there's been an error
    
        header("location: login.php?message=some fields not filled!");

     }else{ 

      // count all users
        $allusers = scandir("data/");
        $countallusers = count($allusers);

    
       

        // check if user already exists
        for($counter = 0; $counter < $countallusers; $counter++){
           $currentuser = $allusers[$counter];
           
           if($currentuser == $username . ".json"){
            $userdata = file_get_contents("data/" . $currentuser);
            $userobject = json_decode($userdata);
            $passwordfromdata = $userobject->pass_word;
            $passwordfromuser = $password;

            // password validation

            if($passwordfromdata == $passwordfromuser){
               header("location: profile.php");
               break;
            }
         }
        }
    echo "inalid username or password!";
    include "login.php";
   die();
   }
   
?>