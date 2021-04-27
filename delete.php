<?php
include 'databasehandler.php';
$courseid = $_GET['id']
$sql = "DELETE FROM courses WHERE courseid=$courseid;";
$result = $conn->query($sql);
$conn->close();
header("location: dashboard.php");
?>