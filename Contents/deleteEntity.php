<?php
require('config.php');
$entity = $_POST['entity'];
$codeRepresentant = $_POST['codeRepresentant'];
$colonne = $_POST['colonne'];
if($connect) {
  mysqli_select_db($connect, 'sunucommande') or die ('Erreur de connexion à la base de données');
  $req = "DELETE FROM $entity where $colonne = '$codeRepresentant'";
  $query = mysqli_query($connect, $req) or die(mysqli_error($connect));
}