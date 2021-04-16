<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pfe";

$conn = new mysqli($servername, $username, $password, $dbname);

$iden= $_GET['id'];
echo $iden;
$del = mysqli_query($conn,"delete from client where id = '$iden'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:listclient.php"); // redirects to all records page
    exit;
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>
