<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.css"/>
  <link rel="stylesheet" href="../Css/main.css">
  <title>Document</title>
  <script src="../JS/jquery.js"></script>
  <script src="../bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>
  <script src="../JS/commandes.js"></script>
</head>
<body>
  <div id="container" class="container-fluide">
  <br><br>
  <div class="row">
  <div class="offset-md-3"></div>
  <div class="badge badge-primary text-wrap"><h2>Sunu Commande</h2></div>
  </div>
  <br><br><br>
  <div class="menu">
  <?php include('./menu.php'); ?>
  </div>
  <br><br><br>
  <div class="row">
  <div class="offset-md-2">
  <h3>
  Reglement
  </h3>
  </div>
  </div>

  <br><br>
  <hr>
<div class="row justify-content-md-center">
  <fieldset>
  <legend>Saisir Commande</legend>
  <div class="row">
  <div id="rep"></div><button id="search" class="btn btn-success">Search</button><button onClick="print()" class="btn btn-primary">Imprimer</button>
  </div>
    <br><br> 
  </fieldset>
</div> <hr>
<br><br>
<div class="row">
  <div class="offset-md-1 col-md-11">
  <div id="tableC"></div>
  </div>
</div>
  </div>
</body>
</html>
