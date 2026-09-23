<FORM ENCTYPE=multipart/form-data ACTION=upload.php METHOD=POST>
<input type=hidden name=nbphotos value=2>

<?php
if ($_POST['nombre_photos']) {
    echo "Vous avez choisi d'uploader " . $_POST['nombre_photos'] . " photos.";
}

echo "<br>";
for ($i = 1; $i <= $_POST['nombre_photos']; $i++) {
    echo "<input type=file name=photo$i><br>";
}

echo "<br>";
echo "<input type=submit value=Télécharger Photos>";
echo "</FORM>";

echo "<br>";
echo "<form action=index.html method=post>";
echo "Retourner au formulaire d'envoi de photos<br>";;
echo "<input type=submit value=Retour>";
echo "</form>";

?>