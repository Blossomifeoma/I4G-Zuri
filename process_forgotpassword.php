<?php
  $errorcount = 0;

  // data verification
    $username = $_POST["user_name"] !="" ? $_POST["user_name"] : $errorcount++; 
    $password = $_POST["new_password"] !="" ? $_POST["new_password"] : $errorcount++;
    $Confirmpassword = $_POST["confirm_password"] !="" ? $_POST["confirm_password"] : $errorcount++;

    $username = $_POST["user_name"]; 
    $password = $_POST["new_password"];
    $Confirmpassword = $_POST["confirm_password"];
    if($errorcount > 0){

       // informs users there's been an error
    
        header("location: forgotpassword.php?message=some fields not filled!");

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
            $userobject->pass_word = $password; 

            // delete user data

            unlink("data/" . $currentuser);

            // recreate new file with updated password

            file_put_contents("data/" . $username. ".json" , json_encode($userobject));
            echo "Password successfully reset!";
            header("location: login.php");
           }

            
            
           }
     }
            

?>