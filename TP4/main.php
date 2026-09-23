<?php
$bdd = "roose";
$host = "lakartxela.iutbayonne.univ-pau.fr";
$user = "roose";
$pass = "roose";

$nomtable = "bourse"; 
/* connexion à la base de données */
print "tentative dee connexion sur site bd<br>";

$link = mysqli_connect($host, $user, $pass, $bdd) or die("Impossible de se connecter");
if ($link) {
    print "connexion réussie<br>";
} else {
    print "connexion échouée<br>";
}
?>