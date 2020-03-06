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
  <script src="../JS/product.js"></script>
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
    <select type="text" class="form-control">
      <option value="Client">Client</option>
    </select><br><br>
    <input type="text" disabled placeholder="Nom du client" class="form-control"><br><br>
    <input type="text" class="form-control" disabled placeholder="Code Représentant"><input type="text" disabled placeholder="Nom représentant" class="form-control"><br><br>

   
  </form>
  </fieldset>
  <fieldset class="offset-md-2">
    <legend>Produit</legend>
    <form action="" method="post">
      <select name="produit" id="produit" class="form-control">
        <option value="produit">Produit</option>
      </select><br><br>
      <input type="number" id="qte" placeholder="Qte" class="form-control"><br><br>
    </form>
    <div class="row justify-content-md-center">
        <button onClick="ajouterProduit()" id="submit" class="btn btn-success">Ajouter</button>
      </div>
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
  <th scope="col">P.U</th>
  <th scope="col">Quantité</th>
  <th scope="col">Montant</th>
  <th scope=""></th>
  <th scope=""></th>
  </tr>
  </thead>
  <tbody id="data">
  <tr>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td><a href="#"><button class="btn btn-danger">Supprimer</button></a></td>
  <td><a href="#"><button class="btn btn-primary">Modifier</button></a></td>
  </tr>
  </tbody>
  </table>
  </div>
</div>
  </div>
  <footer class="foot">
  <?php include('./footer.php'); ?>
  </footer>
</body>

<script>
 
    //localStorage.clear('PRODUCTS');
    /*if(localStorage.getItem('PRODUCTS')){
      var arrProduct=localStorage.getItem('PRODUCTS');
      const product = {product: document.getElementById('produit').value,qte:document.getElementById('qte').value};
    //console.log(product);
    arrProduct= arrProduct.concat(product);
    //console.log(arrProduct);
    console.log(JSON.parse(localStorage.getItem('PRODUCTS')));
    }
    else{
      var arrProduct=[];
      const product = {product: document.getElementById('produit').value,qte:document.getElementById('qte').value};
    console.log(product);
    arrProduct= arrProduct.concat(product);
    console.log(arrProduct);
    localStorage.setItem('PRODUCTS',arrProduct);*/
    //console.log(JSON.stringify(localStorage.getItem('PRODUCT')));
    //}
    
  //}
</script>
</html>
