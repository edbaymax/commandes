var isnew = true;
$(document).ready(() => {
  $('#saveRep').click(() => {
    var representant = $('#nomRepresentant').val();
    var code = $('#codeRepresentant').val();
    if(isnew) {
      $.ajax({
        method: 'POST',
        url: '/Commandes/Contents/addR.php',
        data:{
          representant: representant,
          codeRepresentant: code,
        },
        success: (response) => {
          console.log(response);
          alert('Représentant enregistré');
          reloadTabRep();
        }
      });
    } else {
      $.ajax({
        method: 'POST',
        url: '/Commandes/Contents/updateEntity.php',
        data:{
          representant: representant,
          codeRepresentant: code,
        },
        success: (response) => {
          console.log(response);
          alert('Représentant MAJ');
          reloadTabRep();
        }
      });
    }
  });
  $.ajax({
    method: 'GET',
    url: '/Commandes/Contents/getRepresentant.php',
    dataType: 'html',
    success: (data) => {
      $('#tableRep').html(data);
    }
  })
});

function modifR(code, name) {
  document.getElementById('nomRepresentant').value = name;
  document.getElementById('codeRepresentant').value = code;
  isnew = false;
}

function deleteR(code, entity,colonne) {
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
      url: '/Commandes/Contents/getRepresentant.php',
      dataType: 'html',
      success: (data) => {
        $('#tableRep').html(data);
      }
    });
  });
}