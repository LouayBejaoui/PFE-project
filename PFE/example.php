<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pfe";

$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    die('Could not connect: ' . mysql_error());
}
$sql = "INSERT INTO depot VALUES('gh','het','11/12/2021','12/12/2020','14/12/2015','hge','fsdfdsfds dsds',1,'1234',12,12,12,69,18,4578,420,'rzrez','fdfddsf')";

$run =  mysqli_query($conn, $sql);
if ($run==TRUE){
  echo"success!" ;

}else{
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }



 ?>
 /* add row*/
 $(document).ready(function(){
   $("#add_row").click(function(){
     var addcontrols="<tr>"
     addcontrols+=  "  <td><input type='text' name='Nom du client' value='' id='nom'></td>"
   addcontrols+=  "  <td><input type='text name='Responsable' id='resp' ></td>"
   addcontrols+=  "  <td><input type='text name='Mail' id='mail' ></td>"
   addcontrols+=  "  <td><input type='text name='Tél' id='tel' ></td>"
   addcontrols+=  "  <td><input type='text name='fax' id='fax' ></td>"
   addcontrols+=  "  <td><input type='text name='Id client' id='idclient'></td>"
 addcontrols+=    "<td><button type='button' name='button' id='editbtn' class='btn btn-danger' >Edit</button></td>"
 addcontrols+=        "</tr>"
 $("table tbody").append(addcontrols);


//divs
<div id="add" class="form-group row">
<div class="col-xs-2">
     <label for="nom">Nom du client</label>
  <input type="text" name="Nom du client" id="nom"  class="form-control">
</div>
<div class="col-xs-2">
     <label for="nom">Responsable</label>
     <input type="text" name="Responsable" id="resp" class="form-control" >
</div>
<div class="col-xs-2">
     <label for="nom">Mail</label>
     <input type="text" name="Mail" id="mail" class="form-control">
</div>
<div class="col-xs-2">
     <label for="nom">Tél</label>
     <input type="text" name="Tél" id="tel" class="form-control">
</div>
<div class="col-xs-2">
     <label for="nom">Fax</label>
     <input type="text" name="fax" id="fax" class="form-control">
</div>
<div class="col-xs-2">
     <label for="nom">ID client</label>
     <input type="text" name="Id client" id="idclient" class="form-control">
</div>

</div>



$query = "INSERT into client VALUES ('$nom','$nomrespo','$mail','$tel','$fax','$adresse','$idclient')";
$run=  mysqli_query($conn,$query);




//script
<script type="text/javascript">


/*add data*/

/*
$("#save").click(function(){


  var resp = $('#resp').val();
  var mail = $('#mail').val();
  var tel = $("#tel").val();
  var fax = $("#fax").val();
  var nom = $("#nom").val();
  var adresse =$('#adresse').val();
  var idclient = $("#idclient").val();
  var editbtn = $("#editbtn").val();
$("#datatable tbody").last().append(

  '<tr>'+
  '<td>' +nom+     '</td>'+

  '<td>' +resp+     '</td>'+
    '<td>' +mail+     '</td>'+
      '<td>' +tel+     '</td>'+
        '<td>' +fax+     '</td>'+
        '<td>' +adresse+     '</td>'+
            '<td>' +idclient+     '</td>'+
              '<td>' +editbtn+     '</td>'+
  '</tr>'

);
$('#myform').submit();

 $('#resp').val('');
 $('#mail').val('');
$("#tel").val('');
$("#fax").val('');
$("#nom").val('');
 $("#idclient").val('');
$("#editbtn").val('');
$('#adresse').val('');







});








</script>

<td>  <button href="delete.php" class="remove" styles:"height: 30px; width: 30px;font-size: 20px;background-color: #ce1212;color: white;border-radius: 15px; border: none;" value='.$id.'>-</button></td>
