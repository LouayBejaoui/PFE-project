<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "pfe";

$conn = new mysqli($servername, $username, $pass, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
};
$username = $_POST["username"];
$password = $_POST["password"];
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($conn ,$username);
$password = mysqli_real_escape_string($conn ,$password);

$sql="SELECT * FROM staff WHERE username='$username' and password='$password'";
$result=mysqli_query($conn ,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if($count==1)
{
// Register $username, $password and redirect to file "login_success.php"
header("location:homepage.html");
}
else
{
  header("location:index.html");

}
?>
