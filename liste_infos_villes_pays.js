$(document).ready(function() {
    $.ajax({
        url: "liste_pays.php"
    }).then(function(data) {

       for(var x=0; x<data.length; x++){
       $('#dropdownpays').append("<a href='site_pays_detail.php?nom_pays="+data[x].nom_pays+"'>"+data[x].nom_pays+"</a>");
       $('#dropdownpays').append("<br>");
       }
       console.log(data);

    });
});