<?php
require 'verif_session.php';
require 'config.php';

$pdo  = new PDO($dsn, $user, $pass);
$rows = $pdo->query('SELECT mois, valeur FROM ventes ORDER BY id')->fetchAll(PDO::FETCH_ASSOC);

$w = 600; $h = 400; $marge = 50;
$img   = imagecreatetruecolor($w, $h);
$blanc = imagecolorallocate($img, 255, 255, 255);
$noir  = imagecolorallocate($img, 0, 0, 0);
$bleu  = imagecolorallocate($img, 50, 100, 200);
imagefill($img, 0, 0, $blanc);

imageline($img, $marge, $marge, $marge, $h - $marge, $noir);
imageline($img, $marge, $h - $marge, $w - $marge, $h - $marge, $noir);

$n = max(count($rows), 1);
$max = 1;
foreach ($rows as $r) { $max = max($max, $r['valeur']); }
$largeur = ($w - 2 * $marge) / $n;

foreach ($rows as $i => $r) {
    $x1 = $marge + $i * $largeur + 10;
    $x2 = $marge + ($i + 1) * $largeur - 10;
    $hb = ($r['valeur'] / $max) * ($h - 2 * $marge);
    imagefilledrectangle($img, $x1, $h - $marge - $hb, $x2, $h - $marge, $bleu);
    imagestring($img, 3, $x1, $h - $marge + 5, $r['mois'], $noir);
    imagestring($img, 3, $x1, $h - $marge - $hb - 15, $r['valeur'], $noir);
}

header('Content-Type: image/png');
imagepng($img);
imagedestroy($img);
?>