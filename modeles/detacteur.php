<?php
/**
 * Created by PhpStorm.
 * User: Stagiaire
 * Date: 25/04/2016
 * Time: 16:01
 */
// préparation de la requête avec prepare
$requete = $connexion->prepare("Select acteur.*, acteur.nom AS nomacteur, serie_has_acteur.*, serie.id, serie.nom FROM acteur Inner join serie_has_acteur On acteur.id= serie_has_acteur.acteur_id Inner join serie ON serie.id=serie_has_acteur.serie_id Where acteur.id=$idacteur");
