$(document).ready(function() {
    $.ajax({
        url: "liste_utilisateurs_espace_admin.php"
    }).then(function(data) {
      	console.log(data);
       
    });
});

