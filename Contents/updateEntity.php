<?php
require('config.php');
$representant = $_POST['representant'];
$codeRepresentant = $_POST['codeRepresentant'];
if($connect) {
  mysqli_select_db($connect, 'sunucommande') or die ('Erreur de connexion à la base de données');
  $req = "UPDATE representant SET nomRepresentant = '$representant' where codeRepresentant = '$codeRepresentant'";
  $query = mysqli_query($connect, $req) or die(mysqli_error($connect));
}