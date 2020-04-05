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
  Produit
  </h3>
  </div>
  </div>

  <br><br>
  <hr>
<div class="row justify-content-md-center">
  <fieldset>
  <legend>Ajouter un Produit</legend>
  <form action="" method="post">
    <input type="text" class="form-control" name="designation" placeholder="Désignation"/><br><br>
    <input type="text" class="form-control" name="prixUnitaire" placeholder="Prix Unitaire"><br><br>
    <button type="submit" class="btn btn-success float-right">Enregistrer</button>
  </form>
  </fieldset>
</div> <hr>
<br><br>
<div class="row">
  <div class="offset-md-1 col-md-11">
  <table class="table">
  <thead>
  <tr>
  <th scope="col">Code Produit</th>
  <th scope="col">Désignation</th>
  <th scope="col">Prix Unitaire</th>
  <th scope=""></th>
  <th scope=""></th>
  </tr>
  </thead>
  <tbody>
  <tr>
  <td></td>
  <td></td>
  <td></td>
  <td><a href="#"><button class="btn btn-primary">Modifier</button></a></td>
  <td><a href="#"><button class="btn btn-danger">Supprimer</button></a></td>
  </tr>
  </tbody>
  </table>
  </div>
</div>
  </div>
</body>
<footer class="foot">
  <?php include('./footer.php'); ?>
  </footer>
</html>