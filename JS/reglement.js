$(document).ready(function(){
  var numCommande = $('#ncmd').val();
  $.ajax({
    method:'GET',
    url:`getReglement.php?numCommande=${numCommande}`,
    dataType:'html',
    success:function(response){
      $('#reglement').html(response);
    }
  });
})