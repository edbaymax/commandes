var isnew = true;

$(document).ready(() => {
  $('#saveRep').click(() => {
    var client = $('#nomClient').val();
    var produit = $('#designation').val();
    var qte = $('#qte').val();
    var pr = produit.split('-');
    var prixUnitaire = pr[pr.length-1];
    var designation = pr[0];
    var montant = qte*Number.parseInt(prixUnitaire);
    var c = client.split('-');
    var codeClient = c[0];
    var nomClient = c[1];

    if(isnew) {
      $.ajax({
        method: 'POST',
        url: '/Commandes/Contents/addCo.php',
        data:{
          qte: qte,
          prixUnitaire: prixUnitaire,
          designation: designation,
          montant: montant,
          codeClient: codeClient,
          nomClient: nomClient,
        },
        success: (response) => {
          console.log(response);
          alert('Commande ajoutée');
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
    url: '/Commandes/Contents/getCommandes.php',
    dataType: 'html',
    success: (data) => {
      $('#tableRep').html(data);
    }
  });

  $.ajax({
    method: 'GET',
    url: '/Commandes/Contents/getCli.php',
    dataType: 'html',
    success: (data) => {
      $('#rep').html(data);
    }
  })

  $.ajax({
    method: 'GET',
    url: '/Commandes/Contents/getPro.php',
    dataType: 'html',
    success: (data) => {
      $('#pro').html(data);
    }
  })

  $('#search').click(() => {
    var client = $('#nomClient').val();
    var c = client && client.split('-');
    var codeClient = c[0];
    var nomClient = c[1];
    console.log('Bonjour', codeClient);
    $.ajax({
      method: 'GET',
      url: '/Commandes/Contents/getCo.php',
      data:{
        codeClient: codeClient
      },
      dataType: 'html',
      success: (data) => {
        console.log(data);
        $('#tableC').html(data);
      }
    });
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
      url: '/Commandes/Contents/getCommandes.php',
      dataType: 'html',
      success: (data) => {
        $('#tableRep').html(data);
      }
    });
  });
}

function print(){
  var doc = new jsPDF();
  doc.fromHTML($('#container').get(0), 10, 10, {width: 180});
  doc.text(150,20, `${new Date()}`);
  doc.autoPrint();
  doc.output('dataurlnewwindow');
}