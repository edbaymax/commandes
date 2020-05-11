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
  <script src="../JS/client.js"></script>
</head>
<body>
  <div class="container-fluide">
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
  Client
  </h3>
  </div>
  </div>

  <br><br>
  <hr>
<div class="row justify-content-md-center">
  <fieldset>
  <legend>Ajouter un Client</legend>
  <input type="text" class="form-control" id="codeClient" name="codeClient" placeholder="Code Client"/><br><br>
    <input type="text" class="form-control" id="nomClient"  name="nomClient" placeholder="Nom de Client"/><br><br>
    <div id="rep"></div><br><br>
    <button id="saveRep" class="btn btn-success float-right">Enregistrer</button>
  </fieldset>
</div> <hr>
<br><br>
<div class="row">
  <div class="offset-md-1 col-md-11">
  <div id="tableRep">
  </div>
  </div>
</div>
  </div>
</body>

</html>