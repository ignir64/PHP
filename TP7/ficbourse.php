<?php
require 'verif_session.php';   // interdit l'accès direct à l'image
require 'config.php';

$pdo  = new PDO($dsn, $user, $pass);
$rows = $pdo->query('SELECT ville, indice FROM bourse ORDER BY ville')->fetchAll(PDO::FETCH_ASSOC);

$largeur = 300; $hauteur = 340;
$img   = imagecreate($largeur, $hauteur);
$rouge = imagecolorallocate($img, 255, 0, 0);     // fond (1re couleur = fond)
$blanc = imagecolorallocate($img, 255, 255, 255); // texte
$couleurs = [
    'Paris'    => imagecolorallocate($img, 0, 0, 255),   // bleu
    'New York' => imagecolorallocate($img, 0, 255, 0),   // vert
];
$defaut = imagecolorallocate($img, 255, 255, 0);

$echelle = 15;      // pixels par point d'indice (indice max = 20)
$larg_barre = 14;
$x = 10;

foreach ($rows as $r) {
    $indice = (int)$r['indice'];
    $couleur = isset($couleurs[$r['ville']]) ? $couleurs[$r['ville']] : $defaut;

    $haut = $hauteur - $indice * $echelle;   // haut de la barre
    imagefilledrectangle($img, $x, $haut, $x + $larg_barre, $hauteur, $couleur);

    // Ville + indice, écrits verticalement au-dessus de la barre
    imagestringup($img, 2, $x, $haut - 5, $r['ville'] . ' - ' . $indice, $blanc);

    $x += $larg_barre + 2;
}

header('Content-type: image/jpeg');
imagejpeg($img);
imagedestroy($img);
?>