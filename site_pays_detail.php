<!DOCTYPE html>
<html>
<head>
  <title>TC Advisor</title>
  <meta charset="utf-8">
  <link href="site.css" rel="stylesheet">
  <script src="jquery.js"></script>        
  <script src="liste_pays.js"></script>
  <script src="liste_villes.js"></script>
</head>

<?php include("champ_connexion.php") ?>

<body>
  
  <nav id = "entete">
    <div id = "entete">
      <h1>
        <a href="first.php" style="text-decoration:none;">TC Around the World</a>
        <img class="right" src="images/TCATW.png" alt="Travelling" height="200" width="220" style="float:right;margin:-80px 50px 0 20px;"/></h1>
    </div>
  </nav>
  <nav id="nav01"></nav>

  <div id="main">
  <nav id="menu">
    
  <h2><?php
      if (isset($_GET['nom_pays'])) {
        echo 'Bienvenue en '.$_GET['nom_pays'].' !';
      }
      else {
        echo 'Erreur : Le pays sélectionné n\'a pas suffisament d\'informations';
      }
    ?>
  </h2>

    <h3>Dans quelle ville voulez-vous partir?</h3>
       <div id="dropdownville"><p> Villes référencés dans ce pays: </p></div>

  </nav>  
    <footer id="foot01"></footer>
  </div>

  <script src="script.js"></script>

</body>
</html>
