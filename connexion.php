<?php

require __DIR__.'/Modele/modele.php';

// si je reçois des données du formulaireconnexion.php,
if (
    isset($_POST['login']) AND
    isset($_POST['password']) 
){
    $password_valide=FetchPassword();
    $login_valide = FetchLogin();
    $login_form=$_POST['login'];
    $password_form=$_POST['password'];

    // je vérifies que login entrée par user = login dans bd et que psw entrée par user = psw dans bd
    if ($login_valide == $_POST['login'] && $password_valide == $_POST['password']) {
    }
}
else {
    // afficher le formulaire
    require __DIR__.'/Vue/formulaireconnexion.php';
}