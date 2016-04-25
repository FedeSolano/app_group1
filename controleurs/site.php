<?php
if(isset($_POST['formlogin']) && $_POST['formlogin'] == "Login"){
    require_once "modeles/connect.php";
}

if(empty($_GET)){
    require_once "modeles/acceuil.php";
    $title .= "Acceuil";
    require_once "vues/acceuil.php";
}elseif(isset($_GET['idserie']) && ctype_digit($_GET['idserie'])){
    $idserie = $_GET['idserie'];
    require_once "modeles/detail.php";
    $title .= "Détail";
    require_once "vues/detail.php";
}elseif(isset($_GET['idacteur']) && ctype_digit($_GET['idacteur'])){
    $idacteur = $_GET['idacteur'];
    require_once "modeles/acteur.php";
    $title .= "Acteur";
    require_once "vues/acteur.php";
}elseif(isset($_GET['idreal']) && ctype_digit($_GET['idreal'])){
    $idreal = $_GET['idreal'];
    require_once "modeles/real.php";
    $title .= "Réalisateur";
    require_once "vues/reali.php";
}
elseif(isset($_GET['idgenre']) && ctype_digit($_GET['idgenre'])){
    $idgenre = $_GET['idgenre'];
    require_once "modeles/genre.php";
    $title .= "Genre";
    require_once "vues/genre.php";
}else{
    require_once "modeles/acceuil.php";
    $title .= "Acceuil";
    require_once "vues/acceuil.php";
}
?>