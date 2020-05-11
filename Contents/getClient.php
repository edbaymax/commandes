<?php
require('config.php');
if($connect) {
  mysqli_select_db($connect, 'sunucommande') or die ('Erreur de connexion à la base de données');
  $req = "SELECT * FROM client";
  $query = mysqli_query($connect, $req) or die(mysqli_error($connect));
  echo "<table class='table'>";
   echo "<thead class='thead-light'>";
   echo "<tr>
        <th scope='col'>Id Client</th>
        <th scope='col'>Nom Client</th>
        <th scope='col'>Identifiant Représentant</th>
        <th scope='col'></th>
        <th scope='col'></th>
          </tr>";
   echo "<tbody>";
  while ($data = mysqli_fetch_array($query)){
   echo "<tr>";
   echo "<td id='name'>".$data['codeClient']."</td>";
   echo "<td id='code' >".$data['nomClient']."</td>";
   echo "<td id='code' >".$data['codeRepresentant']."</td>";
   ?>
  <td><button class='btn btn-primary' onClick="modifR('<?php echo $data['codeClient']; ?>','<?php echo $data['nomClient']; ?>','<?php echo $data['codeRepresentant']; ?>')" id='modifierR'>Modifier</button></td>
  <td><button class='btn btn-danger' onClick="deleteR('<?php echo $data['codeClient'] ?>','client','codeClient')" id='supR'>Supprimer</button></td>
   <?php
   echo "</tr>";
  }
  echo "</tbody>";
   echo "</thead>";
   echo "</table>";
}