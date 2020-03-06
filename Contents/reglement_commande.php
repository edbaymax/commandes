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
  <script src="../JS/reglement.js"></script>
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
  Reglement
  </h3>
  </div>
  </div>

  <br><br>
  <hr>
<div class="row justify-content-md-center">
  <fieldset>
  <legend>Saisir Commande</legend>
  <form action="" method="post">
    <select type="text" class="form-control" id="ncmd">
      <option value="Client">Cmd</option>
    </select><br><br> 
  </form>
  </fieldset>
</div> <hr>
<br><br>
<div class="row">
  <div class="offset-md-1 col-md-11">
  <table class="table">
  <thead>
  <tr>
  <th scope="col">Numéro</th>
  <th scope="col">Montant</th>
  <th scope="col">Date de règlement</th>
  <th scope=""></th>
  <th scope=""></th>
  </tr>
  </thead>
  <tbody id="reglement">
  </tbody>
  </table>
  <label>Montant règlement:</label>
  </div>
</div>
  </div>
  <footer class="foot">
  <?php include('./footer.php'); ?>
  </footer>
</body>
</html>
