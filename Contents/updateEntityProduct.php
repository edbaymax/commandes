<?php
require('config.php');
$codeProduit = $_POST['codeProduit'];
$designation = $_POST['designation'];
$prix = $_POST['prixUnitaire'];
if($connect) {
  mysqli_select_db($connect, 'sunucommande') or die ('Erreur de connexion à la base de données');
  $req = "UPDATE produit SET designation = '$designation', prixUnitaire = '$prix' where codeProduit = '$codeProduit'";
  $query = mysqli_query($connect, $req) or die(mysqli_error($connect));
}