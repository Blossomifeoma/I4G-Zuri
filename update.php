 <?php
include 'databasehandler.php';
$courseid = $_POST['id']
$coursetittle = $_POST["coursetittle"];
$coursecode= $_POST["coursecode"];
$sql = "UPDATE courses  SET coursetittle='$coursetittle', coursecode= '$coursecode' WHERE courseid=$courseid;";
$result = $conn->query($sql);
$conn->close();
header("location: dashboard.php");
?>