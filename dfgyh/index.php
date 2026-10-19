<?php

echo "<h1>Bienvenue dans l'atelier POO de la SAE 3.01 !</h1>";

include_once "classes/recette.class.php";

$recette = new Recette();
$recette->setId(1);
$recette->setNom("Omelette aux piments");
$recette->setDescription("Battre les oeufs et les mélanger avec les piments.");
$recette->setImage("images/omelette_piments.jpg");
$recette->afficherRecette();

