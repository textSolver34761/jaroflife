<?php

require __DIR__.'/Modele/modele.php';

//le login du formulaire est cherché



// si je reçois des données du formulaireid.php,
if (
    isset($_POST['login']) AND
    isset($_POST['password']) 
){
    $login_form=$_POST['login'];
    $password_form=$_POST['password'];

    // je vérifies que login entrée par user = login dans bd et que psw entrée par user = psw dans bd
    if ($login_valide == $_POST['login'] && $password_valide == $_POST['password']) {
        //on démare la session
        Session_start();
        // on enregistre les infos utiles pour une utilisation future
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['password'] = $_POST['password'];
        // rediriger vers page membre.php
        header('Location: Vue/page_membre.php');
    }
}
else {
    // sinon, on redirige le user vers l'index.php
    echo('Attention, vous n êtes pas inscrits!');
    header('Location: index.php');
}