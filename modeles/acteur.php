<?php
/**
 * Created by PhpStorm.
 * User: Stagiaire
 * Date: 25/04/2016
 * Time: 15:48
 */

//Conectamos a la base de datos
require_once 'config.php';

//Evitamos que salgan errores por variables vacías
error_reporting(E_ALL ^ E_NOTICE);

//Cantidad de resultados por página (debe ser INT, no string/varchar)
$acteurmax = 8;

//Comprueba si está seteado el GET de HTTP
if (isset($_GET["pag"]) && ctype_digit($_GET["pag"])) {
    $numpag = $_GET["pag"];
    $b = $acteurmax * $numpag;
    $a = $b - $acteurmax;

    $limitation = "Limit $a,$b";

} else { //Si el GET de HTTP no está seteado, lleva a la primera página (puede ser cambiado al index.php o lo que sea)
    $limitation = "Limit 0,8";
};

//Define el número 0 para empezar a paginar multiplicado por la cantidad de resultados por página
/*$init = ($pag-1) * $acteurmax;
Limit $init,$acteurmax
*/




$condition = "";
if(isset($_GET['idfiltre']) && ctype_alpha($_GET['idfiltre'])) {
    $l = $_GET['idfiltre'];
    $condition = "WHERE acteur.nom LIKE '$l%'";
}

$requete = $connexion->query("SELECT * FROM acteur $condition order by nom ASC $limitation");
$requete_total = $connexion->query("SELECT * FROM acteur $condition order by nom ASC");
$affichage_requete = $requete->fetchAll(PDO::FETCH_OBJ);
$nb = $requete->rowCount();
$acteurstotal = $requete_total->rowCount();


//Obtiene el total de páginas existentes
$totalpags = ceil($acteurstotal / $acteurmax);
