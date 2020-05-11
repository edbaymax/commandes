<?php
require('config.php');
$codeClient = $_REQUEST['codeClient'];
if($connect) {
  mysqli_select_db($connect, 'sunucommande') or die ('Erreur de connexion à la base de données');
  $req = "SELECT * FROM commande where codeClient = '$codeClient'";
  $query = mysqli_query($connect, $req) or die(mysqli_error($connect));
  echo "<table class='table'>";
   echo "<thead class='thead-light'>";
   echo "<tr>
        <th scope='col'>Produit</th>
        <th scope='col'>Prix Unitaire</th>
        <th scope='col'>Quantité</th>
        <th scope='col'>Total</th>
        <th scope='col'></th>
        <th scope='col'></th>
          </tr>";
   echo "<tbody>";
  while ($data = mysqli_fetch_array($query)){
   echo "<tr>";
   echo "<td id='name'>".$data['designation']."</td>";
   echo "<td id='code' >".$data['prixUnitaire']."</td>";
   echo "<td id='code' >".$data['qte']."</td>";
   echo "<td id='code' >".$data['montant']."</td>";
   echo "<td id='total' ></td>";
   ?>
  <td><button class='btn btn-danger' onClick="deleteR('<?php echo $data['numeroCommande'] ?>','commande','numeroCommande')" id='supR'>Supprimer</button></td>
   <?php
   echo "</tr>";
  }
  echo "</tbody>";
   echo "</thead>";
   echo "</table>";
}