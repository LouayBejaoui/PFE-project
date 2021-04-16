<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pfe";

$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    die('Could not connect: ' . mysql_error());
};

$nom = $_POST['Nom'];
$nomrespo =$_POST['Responsable'];
$mail = $_POST['Mail'];
$tel = $_POST['Tél'];
$fax = $_POST['fax'];
$adresse = $_POST['adresse'];
$idc = $_POST['idc'];

$sql = "INSERT into client VALUES ('$nom','$nomrespo','$mail','$tel','$fax','$adresse','$idc')";
$run=  mysqli_query($conn,$sql);
if ($run==TRUE){
  header("Location: listclient.php");

//try
$query = "SELECT * from client";
$result = mysqli_query($conn,$query);

echo  '<table id="datatable" border="">';
while($row = mysqli_fetch_array($result))
{
   $nom=$row['nom'];
   $nom_resp=$row['nom_resp'];
   $mail=$row['mail'];
   $tel=$row['tel'];
   $fax=$row['fax'];
   $adresse=$row['adresse'];
   $id=$row['id'];


   echo
       '<tr>
           <td>'.$nom.'</td>
           <td>'.$nom_resp.'</td>
           <td>'.$mail.'</td>
           <td>'.$tel.'</td>
           <td>'.$fax.'</td>
           <td>'.$adresse.'</td>
           <td>'.$id.'</td>


       </tr>';

}



}else{
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }








 ?>
