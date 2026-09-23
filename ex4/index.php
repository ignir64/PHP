<?php

$compteur = fopen("compteur.txt", "r+");

//Récupération du nombre de visites

$nb_visites = fgets($compteur);

//Incrémentation du nombre de visites

fseek($compteur, 0);
fputs($compteur, $nb_visites + 1);

echo "Nombre de visites : " . ($nb_visites + 1);

fclose($compteur);

?>