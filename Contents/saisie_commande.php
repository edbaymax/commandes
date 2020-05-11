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
  <script src="../JS/commandes.js"></script>
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
  Commande
  </h3>
  </div>
  <div class="offset-md-2">
    <form action="" method="POST">
      <input placeholder="Numero Commande" type="text"><button>Recherche</button>
    </form>
  </div>
  </div>

  <br><br>
  <hr>
<div class="row justify-content-md-center">
  <fieldset>
  <legend>Saisir Commande</legend>
  <form action="" method="post">
    <div id="rep"></div><br><br>
  </form>
  </fieldset>
  <fieldset class="offset-md-2">
    <legend>Produit</legend>
      <div id="pro"></div><br><br>
      <input type="number" id="qte" placeholder="Qte" class="form-control"><br><br>
    
    <div class="row justify-content-md-center">
        <button id="saveRep" i class="btn btn-success">Ajouter</button>
      </div>
  </fieldset>
</div> <hr>
<br><br>
<div class="row">
  <div class="offset-md-1 col-md-11">
  <div id="tableRep"></div>
  </div>
</div>
  </div>
</body>

</html>
