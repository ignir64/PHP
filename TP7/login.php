<?php
require 'config.php';
session_start();

if (isset($_POST['login']) && isset($_POST['pwd'])) {
    if ($login_valide === $_POST['login'] && $pwd_valide === $_POST['pwd']) {
        session_regenerate_id(true);
        $_SESSION['login'] = $_POST['login'];
        header('Location: bourse.php');
        exit;
    }
    header('Location: index.php?erreur=1');
    exit;
}
echo 'Les variables du formulaire ne sont pas déclarées.';