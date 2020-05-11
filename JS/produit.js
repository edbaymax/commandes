var isnew = true;
$(document).ready(() => {
  $('#saveRep').click(() => {
    var designation = $('#designation').val();
    var codeProduit = $('#codeProduit').val();
    var prixUnitaire = $('#prixUnitaire').val();
    if(isnew) {
      $.ajax({
        method: 'POST',
        url: '/Commandes/Contents/addP.php',
        data:{
          codeProduit: codeProduit,
          designation: designation,
          prixUnitaire: prixUnitaire
        },
        success: (response) => {
          console.log(response);
          alert('Client enregistré');
          reloadTabRep();
        }
      });
    } else {
      $.ajax({
        method: 'POST',
        url: '/Commandes/Contents/updateEntityProduct.php',
        data:{
          codeProduit: codeProduit,
          prixUnitaire: prixUnitaire,
          designation: designation
        },
        success: (response) => {
          console.log(response);
          alert('Client MAJ');
          reloadTabRep();
        }
      });
    }
  });
  $.ajax({
    method: 'GET',
    url: '/Commandes/Contents/getProduit.php',
    dataType: 'html',
    success: (data) => {
      $('#tableRep').html(data);
    }
  });
});

function modifR(code, name, prix) {
  document.getElementById('designation').value = name;
  document.getElementById('codeProduit').value = code;
  document.getElementById('prixUnitaire').value = prix;
  isnew = false;
}

function deleteR(code, entity, colonne) {
  if (confirm('Vous allez supprimer ce représentant ?')) {
    $.ajax({
      method: 'POST',
      url: '/Commandes/Contents/deleteEntity.php',
      data:{
        entity: entity,
        codeRepresentant: code,
        colonne: colonne
      },
      success: (response) => {
        alert('Suppression Réussie');
        reloadTabRep();
      }
    })
  } else {

  }
  
}

function reloadTabRep() {
  $(document).ready(() => {
    $.ajax({
      method: 'GET',
      url: '/Commandes/Contents/getProduit.php',
      dataType: 'html',
      success: (data) => {
        $('#tableRep').html(data);
      }
    });
  });
}