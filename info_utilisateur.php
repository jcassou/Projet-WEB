<!--
Ce fichier est inclu dans mon_compte.php, où un session_start() est lancée. Pas besoin d'en lancer une ici. On peut utiliser $_SESSION.
-->
<?php
try{
  $bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', '');
}catch (Exception $e){
  die('Erreur : '.$e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM utilisateur WHERE adresse_mail_utilisateur = \''.$_SESSION['login'].'\'');

while($donnees = $reponse->fetch()){

?>

  <p>
  NOM : <?php echo $donnees['nom_utilisateur'];?></p>
  <p>
  PRENOM : <?php echo $donnees['prenom_utilisateur'];?></p>
  <p>
  PROMO : <?php echo $donnees['promo_utilisateur'];?></p>
  <p>
  NUMERO DE TELEPHONE : 
  <?php 
  if($donnees['numero_telephone_utilisateur']==NULL)
    echo 'Pas de numéro enregistré';
  else
    echo $donnees['nom_utilisateur'];
  ?>
  </p>
  ADRESSE MAIL : <?php echo $donnees['adresse_mail_utilisateur'];?></p>
  <p>

<?php
}
$reponse->closeCursor();
?>


