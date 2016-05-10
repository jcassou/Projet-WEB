$(document).ready(function() {
    $.ajax({
        url: "liste_villes.php"
    }).then(function(data) {
        
       
       for(var x=0; x<data.length; x++){
          var ville = data[x].nom_ville;
          $('#dropdownville').append("<OPTION value='"+ville+"'>");
      }
          
       
    });
});
