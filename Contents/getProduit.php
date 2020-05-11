<?php
require('config.php');
if($connect) {
  mysqli_select_db($connect, 'sunucommande') or die ('Erreur de connexion à la base de données');
  $req = "SELECT * FROM produit";
  $query = mysqli_query($connect, $req) or die(mysqli_error($connect));
  echo "<table class='table'>";
   echo "<thead class='thead-light'>";
   echo "<tr>
        <th scope='col'>Id Produit</th>
        <th scope='col'>Nom Produit</th>
        <th scope='col'>Prix unitaire</th>
        <th scope='col'></th>
        <th scope='col'></th>
          </tr>";
   echo "<tbody>";
  while ($data = mysqli_fetch_array($query)){
   echo "<tr>";
   echo "<td id='name'>".$data['codeProduit']."</td>";
   echo "<td id='code' >".$data['designation']."</td>";
   echo "<td id='code' >".$data['prixUnitaire']."</td>";
   ?>
  <td><button class='btn btn-primary' onClick="modifR('<?php echo $data['codeProduit']; ?>','<?php echo $data['designation']; ?>','<?php echo $data['prixUnitaire']; ?>')" id='modifierR'>Modifier</button></td>
  <td><button class='btn btn-danger' onClick="deleteR('<?php echo $data['codeProduit'] ?>','produit','codeProduit')" id='supR'>Supprimer</button></td>
   <?php
   echo "</tr>";
  }
  echo "</tbody>";
   echo "</thead>";
   echo "</table>";
}