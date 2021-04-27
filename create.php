<?php
include 'databasehandler.php';
$coursetittle = $_POST["coursetittle"];
$coursecode = $_POST["coursecode"];
$sql = "INSERT INTO courses (coursetittle, coursecode) VALUES ('$coursetittle', '$coursecode');";
$conn->query($sql);
$conn->close();
header("location: dashboard.php");
?>