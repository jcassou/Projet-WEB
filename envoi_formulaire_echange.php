<?php

$db=mysql_connect('localhost','root','')
    or die ("erreur de connexion");
    mysql_select_db('projet_web',$db) or die ("Erreur : Connexion impossible la Base de données"); 

$file = 'test.txt';
$login = $_POST["login"] ;
$req = mysql_query("SELECT id_utilisateur FROM utilisateur WHERE adresse_mail_utilisateur='".$login."'");
$row = mysql_fetch_assoc($req);
$iduser = $row['id_utilisateur'];
$depart = $_POST["depart"];
$pays = $_POST["pays"];
 

$req1pays = mysql_query("SELECT nom_pays FROM pays WHERE nom_pays='".$pays."'");
$req2pays = mysql_num_rows($req1pays);
if($req2pays == 0)
{
$req3pays = mysql_query("INSERT INTO pays (nom_pays, id_utilisateur) VALUES ('".$pays."', '".$iduser."') ");}
file_put_contents($file, $iduser);

$req4pays = mysql_query("SELECT id_pays from pays WHERE nom_pays='".$pays."' ");
$req5pays = mysql_fetch_assoc($req4pays);
$idpays = $req5pays['id_pays'];

$ville= $_POST["ville"];
$req1ville = mysql_query("SELECT nom_ville FROM ville WHERE nom_ville='".$ville."'");
$req2ville = mysql_num_rows($req1ville);
if($req2ville ==0)
{
$req3ville = mysql_query("INSERT INTO ville (nom_ville, id_utilisateur, id_pays) VALUES ('".$ville."', '".$iduser."', '".$idpays."')");}

$req4ville = mysql_query("SELECT id_ville FROM ville WHERE nom_ville='".$ville."'");
$req5ville = mysql_fetch_assoc($req4ville);
$idville = $req5ville['id_ville'];
  
if($depart == stage){               
   $duree = $_POST["duree_stage"];
   $annee = $_POST["annee_stage"];
   $entreprise = $_POST["nom_entreprise"];
   $req4 = mysql_query("INSERT INTO entreprise (duree_stage, annee_stage, nom_entreprise, id_utilisateur, id_ville) VALUES ('".$duree."', '".$annee."', '".$entreprise."', '".$iduser."', '".$idville."')");
}
else{
     $duree = $_POST["duree_echange"];
  $annee = $_POST["annee_echange"];
  $universite = $_POST["nom_universite"];
  $langue = $_POST["langue_cours"];
  $cours = $_POST["cours_interessants"];
  $req3 = mysql_query("INSERT INTO universite (nom_universite, cours_interessants, duree_echange, langue_cours, annee_echange, id_utilisateur, id_ville) VALUES ('".$universite."', '".$cours."', '".$duree."', '".$langue."','".$annee."', '".$iduser."', '".$idville."')");  
}



?>           