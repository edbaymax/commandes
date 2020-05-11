var isnew = true;
$(document).ready(() => {
  $('#saveRep').click(() => {
    var nomClient = $('#nomClient').val();
    var code = $('#codeClient').val();
    var codeR = $('#codeRepresentant').val();
    if(isnew) {
      $.ajax({
        method: 'POST',
        url: '/Commandes/Contents/addC.php',
        data:{
          client: nomClient,
          codeRepresentant: codeR,
          code: code
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
        url: '/Commandes/Contents/updateEntityClient.php',
        data:{
          client: nomClient,
          codeRepresentant: codeR,
          code: code
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
    url: '/Commandes/Contents/getClient.php',
    dataType: 'html',
    success: (data) => {
      $('#tableRep').html(data);
    }
  });

  $.ajax({
    method: 'GET',
    url: '/Commandes/Contents/getRep.php',
    dataType: 'html',
    success: (data) => {
      $('#rep').html(data);
    }
  })
});

function modifR(code, name, codeR) {
  document.getElementById('nomClient').value = name;
  document.getElementById('codeClient').value = code;
  document.getElementById('codeRepresentant').value = codeR
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
      url: '/Commandes/Contents/getClient.php',
      dataType: 'html',
      success: (data) => {
        $('#tableRep').html(data);
      }
    });
  });
}