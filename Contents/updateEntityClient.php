<?php
require('config.php');
$client = $_POST['client'];
$code = $_POST['code'];
$codeRepresentant = $_POST['codeRepresentant'];
if($connect) {
  mysqli_select_db($connect, 'sunucommande') or die ('Erreur de connexion à la base de données');
  $req = "UPDATE client SET nomClient = '$client', codeRepresentant = '$codeRepresentant' where codeClient = '$code'";
  $query = mysqli_query($connect, $req) or die(mysqli_error($connect));
}