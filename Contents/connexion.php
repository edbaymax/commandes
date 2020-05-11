<?php
require('config.php');
$login = $_POST['login'];
$mdp = $_POST['password'];
if($connect) {
  mysqli_select_db($connect, 'sunucommande') or die ('Erreur de connexion à la base de données');
  $req = "SELECT * FROM users where login='$login'";
  $query = mysqli_query($connect, $req) or die(mysqli_error($connect));
  $data = mysqli_fetch_assoc($query);
  if($mdp == $data['password']) {
    session_start();
    $_SESSION['login'] = $login;
    header('location: /Commandes/Contents/acceuil.php');
  } else {
    header('location: /Commandes');
  }
}