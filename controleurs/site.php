<?php
if(isset($_POST['formlogin']) && $_POST['formlogin'] == "Login"){
    require_once "modeles/connect.php";
}

if(empty($_GET)){
    require_once "modeles/accueil.php";
    $title .= "Accueil";
    require_once "vues/accueil.php";
}elseif(isset($_GET['idserie']) && ctype_digit($_GET['idserie'])){
    $idserie = $_GET['idserie'];
    require_once "modeles/detserie.php";
    $title .= "Détail série";
    require_once "vues/detserie.php";
}elseif(isset($_GET['idacteur']) && ctype_digit($_GET['idacteur'])){
    $idacteur = $_GET['idacteur'];
    require_once "modeles/detacteur.php";
    $title .= "Détail acteur";
    require_once "vues/detacteur.php";
}elseif(isset($_GET['idreal']) && ctype_digit($_GET['idreal'])){
    $idreal = $_GET['idreal'];
    require_once "modeles/detreal.php";
    $title .= "Détail réalisateur";
    require_once "vues/detreal.php";
}elseif(isset($_GET['se']) && $_GET['se']=="real"){
    require_once "modeles/real.php";
    $title .= "Liste des réalisateurs";
    require_once "vues/real.php";
}elseif(isset($_GET['se']) && $_GET['se']=="acteur"){
    require_once "modeles/acteur.php";
    $title .= "Liste des acteur";
    require_once "vues/acteur.php";
}elseif(isset($_GET['se']) && $_GET['se']=="serie"){
    require_once "modeles/serie.php";
    $title .= "Liste des séries";
    require_once "vues/serie.php";
}elseif(isset($_GET['se']) && $_GET['se']=="connex"){
    require_once "modeles/connex.php";
    $title .= "Connexion";
    require_once "vues/connex.php";
}else{
    require_once "modeles/accueil.php";
    $title .= "Accueil";
    require_once "vues/accueil.php";
}
?>