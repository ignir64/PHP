<?php
$config = fopen("config.ini", "r");

if(!($config)) {
    print "le fichier n'existe pas"; 
    exit;
}

while(!feof($config)) {
    $ligne = trim(fgets($config));
    if ($ligne == "[NOMFIC]") {
        $nomFic = trim(fgets($config));
    }
    if ($ligne == "[NB]") {
        $nbChamps = trim(fgets($config));
    }
    if ($ligne == "[NOMS]") {
        while(!feof($config)) {
            $ligne = trim(fgets($config));
            if ($ligne == "--- IGNORE ---") {
                break;
            }
            $noms[] = $ligne;
        }
    }
}



fgets($config);

$nomForm = trim(fgets($config)).".html";
fclose($config);

$form = fopen($nomForm, "a+");
fclose($nomForm);
fclose($form);

?>