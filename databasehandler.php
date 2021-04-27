<?php

$servername = "localhost";
$databaseusername = "root";
$databasepassword = "";
$databasename = "zuritask";

$conn = new mysqli($servername, $databaseusername, $databasepassword, $databasename);

if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
}
?>