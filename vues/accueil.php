﻿<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><!--Titre de la page--></title>
	<link rel="stylesheet" href="vues/style.css">
</head>
<body>
	<div id="warper">
		<div id="header">
			<?php require "menu.php"; ?>
		</div>
		<div id="contener">
			<!--Block a gauche-->
			<div id="BlockGauche">
			<!--Erreur si pas d'article-->
				<div id="article">
					<!--Contenu supérieur-->
					<div class="titre"><!--Titre-->Titre</div><br/>
					<div class="texte">
						<span class="soustitre"><!--Sous titre-->Exemple : </span><!--Le contenu du sous titre--> Je suis l'exemple</a><br/>
					</div>
					<!--Contenu inférieur-->
					<div class="texte2">
					<span class="soustitre"><!--Le titre du gros texte-->Explication : </span><br/>
					<!--L'affichage du gros texte-->
					Le gros texte.
					<br/><br/>
					<a href="#">[Détails]</a>
					</div>
				</div>
			</div>
			<!--block a droite-->
			<div id="BlockDroite">
			</div>
		</div>
	</div>
</body>
</html>
