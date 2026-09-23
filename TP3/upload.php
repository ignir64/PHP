<?php
for ($i = 1; $i <= $_POST['nbphotos']; $i++) {
    if () {
        move_uploaded_file($_FILES['photo' . $i]['tmp_name'], $uploadFile)
    }
}
//move_uploaded_file($_FILES['photo1']['tmp_name'], 'uploads/' . $_FILES['photo1']['name']);

?>