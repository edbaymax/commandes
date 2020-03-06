$(document).ready(function(){
  $("#submit").click(function(){
    var product=$('#produit').val();
    var qte=$('#qte').val();
    console.log(product,qte);
    $.ajax({
      method:'POST',
      url:'addProduct.php',
      data:{
        product,
        qte
      },
      success:function(data){
        alert(data);
      }
    });
  });
  $.ajax({
    method:'GET',
    url:'getProduct.php',
    dataType:'html',
    success:function(response){
      $('#data').html(response);
    }
  });
})
