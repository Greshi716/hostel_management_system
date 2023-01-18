<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$name1=$_GET['name'];
echo $name1;
$sql = "UPDATE complains SET `solved`='1' WHERE `Full Name`='$name1'";
if (mysqli_query($conn, $sql)) {
//  echo "Record Updated successfully";     
 header("location: complainDetails.php");
} else {
 echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>

<!-- <a href="welcome1.php">Click here</a> -->