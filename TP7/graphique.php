<?php require 'verif_session.php'; ?>
<html>
<head><title>Graphique</title></head>
<body>
<p>Bonjour <?php echo htmlspecialchars($_SESSION['login']); ?> !</p>
<img src="image_graphique.php" alt="Graphique des ventes">
<br />
<a href="logout.php">Déconnexion</a>
</body>
</html>