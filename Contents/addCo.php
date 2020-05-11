<?php
require('config.php');
$client = $_POST['nomClient'];
$qte = $_POST['qte'];
$montant = $_POST['montant'];
$designation = $_POST['designation'];
$prixUnitaire = $_POST['prixUnitaire'];
$codeClient = $_POST['codeClient'];
$date = date('y-m-d');
if($connect) {
  mysqli_select_db($connect, 'sunucommande') or die ('Erreur de connexion à la base de données');
  $req = "INSERT INTO commande values ('','$date','','$designation','$prixUnitaire','$qte','$montant','$codeClient','$nomClient')";
  $query = mysqli_query($connect, $req) or die(mysqli_error($connect));
}