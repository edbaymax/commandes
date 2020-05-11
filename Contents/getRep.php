<?php
require('config.php');
if($connect) {
  mysqli_select_db($connect, 'sunucommande') or die ('Erreur de connexion à la base de données');
  $req = "SELECT * FROM representant";
  $query = mysqli_query($connect, $req) or die(mysqli_error($connect)); 
  echo '<select id="codeRepresentant" class="form-control">';
  while ($data = mysqli_fetch_array($query)){
   
   ?>
    <option value="<?php echo $data['codeRepresentant']; ?>"><?php echo $data['codeRepresentant']." ".$data['nomRepresentant']; ?></option>
   <?php
  }
  echo '</select>';
}