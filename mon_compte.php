<!DOCTYPE html>

<html>
<head>
	<title>Mon Compte</title>
	<meta charset="utf-8">
	<link href="site.css" rel="stylesheet">
</head>

<body>
	<?php include("entete.php"); ?>
	<nav id="nav01"></nav>

	<div id="main">
		<h2>Espace Personnel</h2>
		
		<?php 
			session_start();
			if(!isset($_SESSION['login'])){
		echo "Vous n'êtes actuellement pas connecté(e)...mais pourquoi ?
		</p>
		<p>
		Pas encore de compte ? <a href=\"site_inscription.php\">Inscription</a></p>
		<p>Déja un compte ? <a href=\"accueil.php\">Connexion sur la page d'accueil</a></p>";

		}else{

			echo 'Salut ';  
			echo $_SESSION['login'];
			echo "<br />Voici tes données personnelles que tu pourras moifier d'ici peu.";
		}
		?>

		<footer id="foot01"></footer>
	</div>

	<script src="script.js"></script>

</body>
</html>
