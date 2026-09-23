<?php
$bdd = "roose";
$host = "lakartxela.iutbayonne.univ-pau.fr";
$user = "roose";
$pass = "roose";

$nomtable = "bourse"; 
/* connexion à la base de données */
print "tentative de connexion sur site bd<br>";

$link = mysqli_connect($host, $user, $pass, $bdd) or die("Impossible de se connecter");
if ($link) {
    print "connexion réussie<br>";
} else {
    print "connexion échouée<br>";
}
/*
$query = "SELECT * FROM $nomtable";

$result = mysqli_query($link, $query) or die("Requête impossible");
if ($result) {
    print "Requête réussie<br>";
} else {
    print "Requête échouée<br>";
}

while ($donnees = mysqli_fetch_array($result)) {
    $ch1=$donnees['ville'];
    $ch2=$donnees['indice'];
    print "ville : $ch1, indice : $ch2<br>";
}
*/

//header("Content-type: image/jpeg");

//ImageCreate(400, 300) or die("Impossible de créer l'image");
$test = ImageCreateTrueColor(400, 300) or die("Impossible de créer l'image");
//$test2 = ImageCreateTrueColor(40, 30) or die("Impossible de créer l'image");
$color = ImageColorAllocate($test, 255, 0, 255);
$gamma = Imagegammacorrect($test, 2, 1);
$color2 = ImageColorAllocate($test2, 255, 0, 255);
$polygon = imageFilledPolygon($test, array(100, 10, 50, 60, 150, 60), 4, $color2);

$image = imagefilledrectangle($polygon, 0, 0, $color2);

?>