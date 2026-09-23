<?php

$resto = fopen("resto.csv", "r");

while(!feof($resto)) {
    $ligne_resto = fgetcsv($resto, 255, ";");
    echo "<strong>Nom : </strong> $ligne_resto[0]<br>";
    echo "<strong>Prenom : </strong> $ligne_resto[1]<br>";
    echo "<strong>Restaurant : </strong> $ligne_resto[2]<br>";
    echo "<HR>";
}

fclose($resto);

?>