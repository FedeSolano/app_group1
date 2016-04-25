Thème : Les séries



Base de données
______________________

Acteur : Info sur les acteurs
droit : droit des utilisateurs
genre : Genre des films
realisateur : Info sur les réalisateurs
series : les series avec leurs infos
series_has_acteur : table de liaison
series_has_genre : table de liaison
series_has_realisateur : table de liaison
util : Info sur les utilisateurs
util_comm_series : le(s) commentaires d'un utilisateurs sur une séries bien précises.
until_like_series : Si un utilisateurs aimes ou n'aime pas une sérieux.[non obligatoires] Le champs avis est égales a 1 ou 2. 1 pour aime et 2 pour n'aime pas.



Info
______________________

model.html sert juste a avoir un design simpliste sur le quel on peut travailler.
vues/style.css est a concerver / modifier pour adapter le design au besoin.




Objectif :
______________________

Menu :

Un bouton pour revenir a l'accueil
Un bouton "Acteur","Réalisateur" et "Genre"
Un formulaire Login / Pass pour se connecter.



Accueil :

Afficher sur le block de gauche les derniers séries ajouter.
Sur le block de droite afficher 3/4 séries random.
titre du film, bref description
le(s) réalisateur (4 max), les acteurs (4 max) cliquable qui amène sur leurs descriptions.
les genres(4 Max) qui amènes sur la page genre avec le bon filtre.



Acteur :

Liste déroulante avec les acteurs, quand on choisis un acteur on affiche toutes les séries dans les quels il a jouer.




Réalisateur / Genre : Idem qu'acteur.



Détails :

Pour une séries on affiche toute la description de la séries, ainsi que tous les acteurs, réalisateurs et genre.
Pour un acteur on affiche ces informations (nom,bio) et une photo. Ainsi que les séries dans les quelles il a jouer.
Pour un réalisateurs on affiche ces informations (nom,bio) et une photo. Ainsi que toutes les séries qu'il a produit.



Administration :

On peut ajouter/modifier/supprimer des séries,acteurs,réalisateur et genre.



Tâches :
______________________

