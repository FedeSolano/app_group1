<?php
require_once 'config.php';
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
    <link rel="stylesheet" href="vues/style.css">
  <style>
    #liste ul{
      list-style-type:none
    }
    #liste li{
      display: inline-block
    }
  </style>

     </head>
     <body>

     <div id="warper">
       <div id="header">

         <?php require "menu.php"; ?>
       </div>
       <div id="contener">

     <h1>Liste d'acteurs</h1>
     <h2></h2>


           <div id="BlockGauche">
               <div id="filtre">
                   [ <a href="?se=acteur">all</a>
                   <?php
                   $alphas = range('A', 'Z');
                   for($aa=0;$aa<26;$aa++){
                       echo "<a href=\"?se=acteur&idfiltre=$alphas[$aa]\">".$alphas[$aa]."</a> ";
                   }
                   ?>
                   ]
               </div>
   <?php
   // préparation de la requête avec prepare


   // exécution de la requête
   $requete->execute();
    if($nb == 0){
        echo "<br/><h4>Pas d'acteurs !</h4<";
    }else{
   // affichage des résultats
   while ($res = $requete->fetch(PDO::FETCH_ASSOC)){
     echo"<div id='article'>";
     echo"<div class='titre'>".$res['nom']."</div><br/>";
     echo'<div class="texte">';
     echo'<span class="soustitre"><img src="vues/images/big/'.$res["photo"].'" /><br/></div>';
     echo'<div class="texte2">';
     echo'<span class="soustitre">Bio : </span><br/>'.substr($res["bio"], 0, 250).'...<br/><br/>';
     echo'<a href="?idacteur='.$res["id"].'">[Lire la suite]</a></p></div></div>';



     /*
     echo"<img src='vues/images/big/".$res['photo']."' />";
     echo"<div class='titre'>".$res['nom']."</div>";
     echo"<div class='texte'><p>".substr($res['bio'], 0, 250)."...";
     echo"<a href='?idacteur=".$res['id']."'>Lire la suite</a></p></div>";
     echo"</div>";
   */
}

?>
               <div id="pagination"> <?php
                   //Crea un bucle donde $i es igual 1, y hasta que $i sea menor o igual a X, a sumar (1, 2, 3, etc.)
                   //Nota: X = $total_paginas
                   for ($i=1; $i<=$totalpags; $i++) {
                       //En el bucle, muestra la paginación
                       echo "<a href='?se=acteur&pag=".$i."'>".$i."</a>  ";
                   }; } ?></div>
           </div>


     </div>

     </div>

  </body>
</html>
