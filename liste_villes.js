$(document).ready(function() {
    $.ajax({
        url: "liste_villes.php"
    }).then(function(data) {
        
       
       for(var x=0; x<data.length; x++){
       $('#dropdownville').append("<a href='site_ville_detail.php?nom_ville="+data[x].nom_ville="'>"+data[x].nom_ville+"</a>");
       $('#dropdownville').append("<br>");
       }
       console.log(data);
        
    });
});
