<!DOCTYPE html>
<html>
  <head>
	 <title>TC Advisor</title>
	 <meta charset="utf-8">
	 <link href="site.css" rel="stylesheet">
   <script src="jquery.js"></script>        
   <script src="liste_pays_formulaire_echange.js"></script>
   <script src="liste_villes_formulaire_echange.js"></script>
   <script src="liste_durees_stage_formulaire_echange.js"></script>
   <script src="liste_annees_stage_formulaire_echange.js"></script>
   <script src="liste_durees_echange_formulaire_echange.js"></script>
   <script src="liste_annees_echange_formulaire_echange.js"></script>
  </head>
 
  <body>
     <?php session_start(); ?>
    <nav id="entete">
	    <div id="entete">
		   <h1>
       <a href="first.php" style="text-decoration:none;">TC Around the World</a>
       <img class="right" src="images/travel.png" alt="Travelling" height="150" width="250" style="float:right;margin:-40px 50px 0 20px;"/></h1>
	    </div>
    </nav>
    <nav id="nav01"></nav>
    
    
    <div id="main">	
    <nav id="menu">	  
    <form action="accueil.php" id="contrat">   
    <input type="hidden" name="login" id="login" value="<?php echo $_SESSION['login'];?>">
    <div id="formulaire">
            <table>
               <tr>
               <td><label><strong>Pays dans lequel tu es parti :</strong></label></td>   
               <td> <input list="dropdownpays" name="pays" type="text" id="pays"> <datalist id="dropdownpays">
               </datalist> 
                         
               </tr>
            </table>
             <table>
               <tr>
               <td><label><strong>Ville dans laquelle tu es parti :</strong></label></td>   
               <td> <input list="dropdownville" name="ville" type="text" id="ville"> <datalist id="dropdownville">
               </datalist> 
                         
               </tr>
            </table>
            
            <table>
               <tr>
                  <td><label for="echange_type"><strong>Tu es parti en </strong></label></td>
                  <td><form action="">
                  <input type="radio" checked="checked" name="depart" id="echange" value='echange'> Echange<br>
                  <input type="radio" name="depart" id="stage" value='stage'> Stage<br>
                  </form> 
               </td>                                
               </tr>             
          </table>
          <br>
          <br>
          <div class="stage"><table><tr><td><Strong>Durée du stage (en mois)</strong></td>
          <td>
             <input list="dropdowndureestage" name="duree_stage" type="text" id="duree_stage"> <datalist id="dropdowndureestage"></datalist>
        </td>
        </tr>
         <tr><td><Strong>Année du stage</strong></td>
          <td>
          <input list="dropdownanneestage" name="annee_stage" type="text" id="annee_stage"> <datalist id="dropdownanneestage"></datalist>
        </td>
        </tr>
        <tr><td>   <label for="nom_entreprise"><strong>Nom de l'entreprise </strong></label></td>
                  <td>
                     <input type="text"  name="nom_entreprise" id="nom_entreprise"/>
                  </td> 
                  </tr>
          
          </table> </div>
           <div class="echange"><table><tr><td><Strong>Durée de l'échange (en mois)</strong></td>
          <td><input list="dropdowndureeechange" name="duree_echange" type="text" id="duree_echange"> <datalist id="dropdowndureeechange">
               </datalist> 
        </td>
        </tr>
         <tr><td><Strong>Année de l'échange</strong></td>
          <td><input list="dropdownanneechange" name="annee_echange" type="text" id="annee_echange"> <datalist id="dropdownanneeechange">
               </datalist> 
        </td>
        </tr>
        <tr><td>   <label for="nom_universite"><strong>Nom de l'universite </strong></label></td>
                  <td>
                     <input type="text"  name="nom_universite" id="nom_universite"/>
                  </td> 
                  </tr>
            <tr><td>   <label for="langue_cours"><strong>Langue des cours </strong></label></td>
                  <td>
                     <input type="text" name="langue_cours" id="langue_cours"/>
                  </td> 
                  </tr>    
               <tr><td>   <label for="cours_interessants"><strong>Cours interessants </strong></label></td>
                  <td>
            <textarea id="cours_interessants" name="cours_interessants" rows="5" cols="70"></textarea>
                  </td> 
                  </tr>
          </table> </div>
           </div>
       
     </form>  
    <input type="submit" value="Saisir les infos"/>
    <input type="button" onclick="location.replace('accueil.php');" value="Retour à l'accueil"/>
         
          
    <footer id="foot01"></footer>
	 </div>
	
  <script src="script.js"></script>
  <script src="script_hide.js"></script> 
  <script src="envoi_formulaire_echange.js"></script>

</body>
</html>
