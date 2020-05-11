<?php
require('config.php');
if($connect) {
  mysqli_select_db($connect, 'sunucommande') or die ('Erreur de connexion à la base de données');
  $req = "SELECT * FROM produit";
  $query = mysqli_query($connect, $req) or die(mysqli_error($connect)); 
  echo '<select id="designation" class="form-control">';
  while ($data = mysqli_fetch_array($query)){
   
   ?>
    <option value="<?php echo $data['designation']."-".$data['prixUnitaire'] ; ?>"><?php echo $data['codeProduit']." ".$data['designation']; ?></option>
   <?php
  }
  echo '</select>';
}