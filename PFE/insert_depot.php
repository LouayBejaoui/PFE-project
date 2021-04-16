<?php

$n_recu = $_POST['recu'];
$date_recu = $_POST['date_reçu'];
$num_auto = $_POST['num_autorisation'];
$date_auto = $_POST['date_autorisation'];
$date_depot = $_POST['date_depot'];
$client = $_POST['client'];
$adresse = $_POST['adresse'];
$service = $_POST['pubad'];
$poid_envoi = $_POST['poids_envoi'];
$prix_unit = $_POST['prixunit'];
$prix_total = $_POST['montant_total'];
$taux_remise = $_POST['taut_remise'];
$montant_remise = $_POST['montant_remise'];
$net = $_POST['net'];
$admin_post_reg = $_POST['admin_post_reg'];
$bureau_poste = $_POST['bureau_de_poste'];
$id_depot =$n_recu . $bureau_poste;


// Create connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pfe";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
};

//verify if a client exists

$num = "SELECT * from depot where UPPER(client)=UPPER('$client')";
$result=mysqli_query($conn ,$num);
$count=mysqli_num_rows($result);

if ($count == 0 ) {
  $num_envoi = 1;

  $clientq="INSERT INTO client VALUES ('$client','$adresse','$num_envoi')";
  $clientrun=mysqli_query($conn,$clientq);

} else {
  $num_envoi = ($count+1);
  $clientq="UPDATE client set num_envoi='$num_envoi' WHERE '$client'==name";
  $clientrun=mysqli_query($conn,$clientq);

}

//insertion
$sql = "INSERT INTO depot VALUES('$n_recu','$num_auto','$date_recu','$date_auto','$date_depot','$client','$adresse','$service','$id_depot','$poid_envoi','$prix_unit','$num_envoi','$prix_total','$taux_remise','$montant_remise','$net','$admin_post_reg','$bureau_poste')";


$run=  mysqli_query($conn,$sql);
if ($run==TRUE){
  header("Location: homepage.html");

}else{
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }

 ?>
