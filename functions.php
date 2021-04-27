 <?php

function emptyinputsignup($fullname, $username, $password, $confirmpassword){
    $result;
    if (empty($fullname) || empty($username) || empty($password) || empty($confirmpassword)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function invalidusername($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function passwordmatch($password, $confirmpassword) {
    $result;
    if ($password !== $confirmpassword) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function usernameexists($conn, $username) {
    $sql = "SELECT * FROM users WHERE usersusername = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: signup.php?error=stmtfailed");  
        exit(); 
    }

     mysqli_stmt_bind_param($stmt, "s", $username);
       mysqli_stmt_execute($stmt);

       $resultdata = mysqli_stmt_get_result($stmt);
       
       if($row = mysqli_fetch_assoc($resultdata)) {
           return $row;
       }
       else {
           $result = false;

           return $result;
       }
       mysqli_stmt_close($stmt);
    }
 
function createuser($conn, $fullname, $username, $password) {
    $sql = "INSERT INTO users (usersfullname, usersusername, userspassword) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
 
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: signup.php?error=stmtfailed");  
        exit(); 
    }
    $hashedpassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $fullname, $username, $hashedpassword);
    mysqli_stmt_execute($stmt);


    mysqli_stmt_close($stmt);
    header("location: login.php?error=none"); 
    exit();
}
function emptyinputlogin($username, $password){ 
    $result;
    if (empty($username) || empty($password)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $password){
    $usernameexists = usernameexists($conn, $username);

if ($usernameexists === false)  {
    header("location: login.php?error=wronglogin");
    exit();
}
$dbpassword = $usernameexists["userspassword"];
$checkpassword = password_verify($password, $dbpassword);

if ($checkpassword === false){
    header("location: login.php?error=wronglogin");
    exit();
}
else if ($checkpassword === true){
    session_start();
    $_SESSION["userid"] = $usernameexists["usersId"];
    $_SESSION["username"] = $usernameexists["usersusername"];
    header("location: dashboard.php");
    exit();
}
}

function emptyinputforgotpassword($username, $password, $confirmpassword){
    $result;
    if (empty($username) || empty($password) || empty($confirmpassword)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function update_password($conn, $username, $password) {
    $usernameexists = usernameexists($conn, $username);

    if ($usernameexists === false)  {
    header("location: forgotpassword.php?error=userdoesnotexist");
    exit();
    }

   $sql = mysqli_query("UPDATE users SET userspassword='$password' WHERE usersusername='$username'");
   $stmt =  mysqli_stmt_init($conn);
 
   if (!mysqli_stmt_prepare($stmt, $sql)) {
       header("location: signup.php?error=stmtfailed");  
       exit(); 
   }
   $hashedpassword = password_hash($password, PASSWORD_DEFAULT);

   mysqli_stmt_bind_param($stmt, "ss", $username, $hashedpassword);
   mysqli_stmt_execute($stmt);


   mysqli_stmt_close($stmt);
   header("location: login.php?error=none"); 
   exit();
}

?>