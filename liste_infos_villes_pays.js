$(document).ready(function() {
    $('#liste_villes').hide();
    $('#infos_ville').hide();
    $.ajax({
        url: "liste_pays.php"
    }).then(function(data) {
   
       for(var x=0; x<data.length; x++){
          var pays = data[x].nom_pays;
          $('#liste_pays').append("<OPTION value='"+pays+"'>"+pays+"</option>");
          }       

    });
});

function checkField(){
  var pays = document.getElementById("liste_pays").value;
  $.ajax({
            type: "POST",
            url: "liste_villes_par_pays.php",
            data:{ nom_pays: pays}})
    .done(function(data){
       $('#liste_villes').show();
       $('#introvilles').html("Choisissez la ville que vous voulez voir dans le pays:  " +pays+" <br> Si elle n'est pas présente dans la liste, c\'est qu\'il n\'y a pas encore d\'informations disponibles dessus :(");
       $('#liste_villes').html("<OPTION value=''></option>");
       for(var x=0; x<data.length; x++){
        var ville = data[x].nom_ville;
        $('#liste_villes').append("<OPTION value='"+ville+"'>"+ville+"</option>");
        
        }
       
      });
}

function checkFieldVille(){
  var ville = document.getElementById("liste_villes").value;
  $.ajax({
          type: "POST",
          url: "infos_ville.php",
          data:{ nom_ville: ville }})
  .done(function(data){
      $('#infos_ville').show();     
      console.log(data);
      for(var x=0; x<data.length; x++){
      $('#introvilles2').html("Voilà les commentaires de " +data[x].prenom_utilisateur +" "+data[x].nom_utilisateur+ " sur la ville de " +ville+" :");    
      $('#infoville').html("Endroits ou sortir: "+data[x].sortir+" <br>");
      $('#infoville').append("Endroits ou manger: "+data[x].manger+" <br>");
      $('#infoville').append("Endroits ou dormir: "+data[x].dormir+" <br>");
      $('#infoville').append("Endroits à visiter: "+data[x].voyager+" <br>");
        }
      
      
      
      
      
      });
      
  
}

