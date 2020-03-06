$(document).ready(function(){
  var numCommande = $('#ncmd').val();
  $.ajax({
    method:'GET',
    url:`getCommande.php?numCommande=${numCommande}`,
    dataType:'html',
    success:function(response){
      $('#commande').html(response);
    }
  });
})