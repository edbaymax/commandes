<?php
require('config.php');
$client = $_POST['client'];
$codeRepresentant = $_POST['codeRepresentant'];
$code = $_POST['code'];
if($connect) {
  mysqli_select_db($connect, 'sunucommande') or die ('Erreur de connexion à la base de données');
  $req = "INSERT INTO client values ('$code','$client','$codeRepresentant')";
  $query = mysqli_query($connect, $req) or die(mysqli_error($connect));
}