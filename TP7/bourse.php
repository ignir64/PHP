<?php
require 'verif_session.php';
require 'config.php';

$pdo = new PDO($dsn, $user, $pass);
// Partie 1 : indices classés par ville
$rows = $pdo->query('SELECT ville, indice FROM bourse ORDER BY ville')->fetchAll(PDO::FETCH_ASSOC);
?>
<html>
<head><title>Site de bourse</title></head>
<body>
<h1>Bourse</h1>
<p>Connecté : <?php echo htmlspecialchars($_SESSION['login']); ?> -
   <a href="logout.php">Déconnexion</a></p>

<h2>Indices par ville</h2>
<ul>
<?php foreach ($rows as $r) {
    echo '<li>' . htmlspecialchars($r['ville']) . ' : ' . (int)$r['indice'] . '</li>';
} ?>
</ul>

<h2>Histogramme</h2>
<IMG SRC="ficbourse.php">Histogramme des indices boursiers</IMG>
</body>
</html>