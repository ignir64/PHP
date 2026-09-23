<?php
    
    $nom = $_POST["NOM"];
    $age = $_POST["AGE"];
    $email = $_POST["EMAIL"];
    $don = $_POST["DON"];

    $resultat = fopen("resultat.txt", "a+");
    fseek($resultat, 0);
    fputs($resultat, "Nom : " . $nom . " | ");
    fputs($resultat, "Age : " . $age . " | ");
    fputs($resultat, "Email : " . $email . " | ");
    fputs($resultat, "Don : " . $don . "\n");

    fclose($resultat);

    header("Location: index.html");

//    mail($email, 
//          "Confirmation de don", 
//          "Merci pour votre don de " . $don . "€ !");


?>