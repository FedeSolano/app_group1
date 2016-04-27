<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="vues/style.css">

  <title>Acteurs</title>
  
</head>
<body>
<div id='warper'>
  <div id="header">

      <?php require 'menu.php'?>
    		</div>

  <div id='contener'>
<h1>Acteurs</h1>
<h2></h2>
  <div id='BlockGauche'>
<?php

// exécution de la requête
$requete->execute();

// affichage des résultats
while ($res = $requete->fetch(PDO::FETCH_ASSOC)){
  echo"<div id='article2'>";
  echo"<div class='titre'><h3>".$res['nomacteur']."</h3></div>";
  echo"<div class='texte'><span class='soustitre'><img src='vues/images/big/".$res['photo']."' /></div>";
  echo'<div class="texte2">';
  echo"<span class='soustitre'>Date de naissance :</span> ".$res['datenais']."<br/>";
  echo"<span class='soustitre'>Lieu de naissance : </span>".$res['lieunais']."<br/>";
  echo"<span class='soustitre'>Nationalité : </span>".$res['natio']."<br/>";
  echo"<p>".$res['bio']." </p>";
  echo"<h4>Séries: ".$res['nom']."</h4></div>  </div>";

}

?>
  </div>
</div>
</div>
</body>
</html>
