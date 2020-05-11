<?php
require('config.php');
if($connect) {
  mysqli_select_db($connect, 'sunucommande') or die ('Erreur de connexion à la base de données');
  $req = "SELECT * FROM client";
  $query = mysqli_query($connect, $req) or die(mysqli_error($connect)); 
  ?>
  <select id="nomClient" class="form-control">
  <?php
  while ($data = mysqli_fetch_array($query)){
   
   ?>
    <option value="<?php echo $data['codeClient']."-".$data['nomClient']; ?>"><?php echo $data['codeClient']." ".$data['nomClient']; ?></option>
   <?php
  }
  echo '</select>';
}