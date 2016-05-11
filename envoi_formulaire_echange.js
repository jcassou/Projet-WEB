$("#contrat").submit(function(event){
    var formContents = $(this).serialize();
    console.dir(formContents);
    $.post("envoi_formulaire_echange.php", formContents); 
    
    });
                                  
  
