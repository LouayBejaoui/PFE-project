<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pfe";

$conn = new mysqli($servername, $username, $password, $dbname);
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/clients.css">
    <title>Clients</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  </head>
  <body>
    <div class="head">
      <img src="images/logo.gif" class="logo" alt="Logo">

    </div>

<table class="table table-bordered" id="datatable">
<thead>
  <tr>
    <th scope="col">Nom du client</th>
    <th scope="col">Responsable</th>
    <th scope="col">Mail</th>
    <th scope="col">Tél</th>
    <th scope="col">Fax</th>
    <th scope="col">Adresse</th>
    <th scope="col">Id client</th>
    <th scope="col">Supprimer</th>





  </tr>
</thead>

<tbody>

<?php
$query = "SELECT * from client";
$result = mysqli_query($conn,$query);
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
           <td><a href="delete.php?id='.$id.' ">Delete</a></td>
           

       </tr>';

}

?>

</tbody>
<tfoot>
</tfoot>
</table>
<form class="" action="client.php" method="post" id="myform">
<table>
<tr>
  <td>
  <label>Nom du client</label>
  <input type="text" name="Nom" id="nom"  class="form-control">
</td>
<td>
  <label>Responsable</label>
  <input type="text" name="Responsable" id="resp" class="form-control" >
</td>
<td>
  <label>Mail</label>
  <input type="text" name="Mail" id="mail" class="form-control">
</td>
<td>
  <label>Tél</label>
  <input type="text" name="Tél" id="tel" class="form-control">
</td>
<td>
  <label >Fax</label>
  <input type="text" name="fax" id="fax" class="form-control">
</td>
  <td>
    <label>Adresse</label>

    <input type="text" name="adresse" id="adresse" class="form-control">
    </td>
    <td>
      <label >ID client</label>

      <input type="text" name="idc" id="idclient" class="form-control">
      </td>


</tr>

</table>
<button type="submit" name="button" class="btn btn-success bt" id="save">Enregistrer</button>
</form>





  </body>
</html>
