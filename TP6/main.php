<html>
    <head>
        <title>Formulaire de recherche</title>
    </head>
    <body>
        <form method="post" action="main.php">
            <input type="text" name="text" value="" placeholder="Entrez une ville">
        </form>
    </body>
</html>

<?php
$json = file_get_contents('fichier.json');
$obj = json_decode($json, true);
$i = 0;
print "Pays Européen : ";
while ($i < count($obj['continents']['europe']['pays'])) {
    print $obj['continents']['europe']['pays'][$i] . " ";
    $i++;
}
print "<br>";
print "Pays Asiatique : ";
$j = 0;
while ($j < count($obj['continents']['asie']['pays'])) {
    print $obj['continents']['asie']['pays'][$j] . " ";
    $j++;
}




/*
$x = 0;
$y = 0;
print "<br>";
while ($x < count($obj['continents'])) {
    $continent = array_keys($obj['continents'])[$x];
    print "Pays du continent " . $continent . " : ";
    while ($y < count($obj['continents'][$continent]['pays'])) {
        print $obj['continents'][$continent]['pays'][$y] . " ";
        $y++;
    }
    print "<br>";
    $x++;
    $y = 0;
}*/
?>